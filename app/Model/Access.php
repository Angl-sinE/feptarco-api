<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';
    const SUPERADMIN_ACCESS = 1;
    const ADMIN_ACCESS = 2;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['module', 'slug', 'permission', 'permission_code'];

    public function roles()
    {
        return $this->belongsToMany("App\Model\Role")->withTimestamps();
    }

}
