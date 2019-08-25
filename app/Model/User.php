<?php

namespace App\Model;

use App\OauthAccessToken;
use Illuminate\Notifications\Notifiable as Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Authenticatable
{

    use HasApiTokens, Notifiable;

    protected $table = 'users';

    const ACTIVE = 1;
    const INACTIVE = 0;
    const STATUS_CURRENT = 1;
    const STATUS_DELETED = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','active','avatar', 'dni','status', 'feptarco_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token','email_canonical'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_roles', 'user_id', 'role_id')
            ->withTimestamps();
    }
    /**
     * Checks if the user has any roles
     * @param $roles
     * @return boolean
     */
    public function hasAnyRole($roles)
    {
        if(is_array($roles)){
            foreach($roles as $role){
               
               if($this->hasRole($role)){
                   return true;
               }
            }
        }
        else{
            if($this->hasRole($roles)){
                return true;
            }   
        }
        return false;
           
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function oAuthAccessToken(){
        return $this->hasMany(OauthAccessToken::class,'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function archerProfile()
    {
         return $this->hasOne('App\Model\ArcherProfile');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function adminProfile()
    {
        return $this->hasOne('App\Model\AdminProfile');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function judgeProfile()
    {
        return $this->hasOne('App\Model\JudgeProfile');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function trainerProfile()
    {
        return $this->hasOne('App\Model\TrainerProfile');
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class, 'asigned_to');
    }

    public function creator(){
        return $this->email;
    }

    public function editor(){
        return $this->email;
    }

    public function enrollment()
    {
        return $this->hasOne('App\Model\CompetitionEnrollment');
    }


    /**
     * Gets the user roles as an array
     * @return array
     */
    public function getRoles()
    {
        $roles = [];
        if ($this->roles()) {
            $roles = $this->roles()->get();
        }
        return $roles;
    }

     /**
     * Gets the user inventory as an array
     * @return array
     */
    public function getInventory()
    {
        $items = [];
        if ($this->inventory()){
            $items = $this->inventory()->get();
        }
        return $items;
    }

    /** Checks if the user has the role parameter
     * @param $role
     * @return boolean
     */
    public function hasRole($role)
    {
        if( $this->roles()->where('name' , $role)->first()){
            return true;
        }
        return false;
    }
}
