<?php

use Illuminate\Database\Seeder;

class RoleAccessSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //** roles asigned to permissions */  

    /** ARCHER ROLE PERMISSIONS */
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-view'),
        'role_id' => $this->getRoleId('archer')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-edit'),
        'role_id' => $this->getRoleId('archer')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-gear-create'),
        'role_id' => $this->getRoleId('archer')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-gear-edit'),
        'role_id' => $this->getRoleId('archer')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-gear-delete'),
        'role_id' => $this->getRoleId('archer')
       
    ]);

    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('competition-enrollment-view'),
        'role_id' => $this->getRoleId('archer')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('competition-enrollment-edit'),
        'role_id' => $this->getRoleId('archer')
       
    ]);
    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('competition-enrollment-create'),
            'role_id' => $this->getRoleId('archer')

    ]);

    /** SUPERADMIN PERMISSION */
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('all'),
        'role_id' => $this->getRoleId('superadmin')
       
    ]);

    /** ADMIN ROLE PERMISSIONS */
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-all'),
        'role_id' => $this->getRoleId('admin')
       
    ]);
    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('athletes-view'),
            'role_id' => $this->getRoleId('admin')

    ]);

    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('athlete-stats-view'),
        'role_id' => $this->getRoleId('admin')
       
    ]);
    
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('competition-registration-all'),
        'role_id' => $this->getRoleId('admin')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('user-registration-all'),
        'role_id' => $this->getRoleId('admin')
       
    ]);
    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('feptarco-inventory-all'),
        'role_id' => $this->getRoleId('admin')
       
    ]);

    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('competition-enrollments'),
            'role_id' => $this->getRoleId('admin')
    ]);

    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('roles-view'),
            'role_id' => $this->getRoleId('admin')

    ]);

    /** TRAINER PERMISSIONS */
    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-view'),
            'role_id' => $this->getRoleId('trainer')

    ]);
    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-edit'),
            'role_id' => $this->getRoleId('trainer')

    ]);
    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-gear-create'),
            'role_id' => $this->getRoleId('trainer')

    ]);

    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-gear-edit'),
            'role_id' => $this->getRoleId('trainer')

    ]);

    DB::table('role_access')->insert([
        'access_id' => $this->getAccessId('profile-gear-delete'),
        'role_id' => $this->getRoleId('trainer')

    ]);

    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('athlete-stats-view'),
            'role_id' => $this->getRoleId('trainer')

    ]);

    DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('athletes-view'),
            'role_id' => $this->getRoleId('trainer')

    ]);



    /** JUDGE PERMISSIONS */
        DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-view'),
            'role_id' => $this->getRoleId('judge')

        ]);
        DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-edit'),
            'role_id' => $this->getRoleId('judge')

        ]);

        DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-gear-create'),
            'role_id' => $this->getRoleId('judge')

        ]);

        DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-gear-edit'),
            'role_id' => $this->getRoleId('judge')

        ]);

        DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('profile-gear-delete'),
            'role_id' => $this->getRoleId('judge')

        ]);
        DB::table('role_access')->insert([
            'access_id' => $this->getAccessId('athletes-view'),
            'role_id' => $this->getRoleId('judge')

        ]);

           
    }
    private function getRoleId($roleName)
    {
        $role = \App\Model\Role::where('name', $roleName)->get()->first();
        return $role->id;
    }
    private function getAccessId($accessName)
    {
        $access = \App\Model\Access::where('slug', $accessName)->get()->first();
        return $access->id;
    }
    
}
