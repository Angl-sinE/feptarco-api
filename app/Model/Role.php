<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    const ROLE_ARCHER = 'archer';
    const ROLE_TRAINER = 'trainer';
    const ROLE_JUDGE = 'judge';
    const ROLE_SUPERADMIN = 'superadmin';
    const ROLE_ADMIN = 'admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'name_canonical', 'description', 'isAdmin'];

    /**
     * Many-to-Many relations with User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users() {
        return $this->belongsToMany('App\Model\User')
            ->withTimestamps();
    }

    public function access() {
        return $this->belongsToMany("App\Model\Access");
    }

    /**
     * Checks if the role has any permission
     * @param $permission
     * @return boolean
     */
    public function hasAnyPermission($permissions){
        if(is_array($permissions)){
            foreach ($permissions as $permission){
                if ($this->hasPermission($permission))
                    return true;
            }
        }
        else {
            if ($this->hasPermission($permissions))
                return true;
            
        }
        return false;
    }

    /**
     * Checks if the role has the permission parameter
     * @param $permission
     * @return boolean
     */
    public function hasPermission($permission){
        if ($this->access()->where('module_canonical', $permission)->first()){
            return true;
        }
        return false;
    }
}
