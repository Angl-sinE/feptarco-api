<?php

use Illuminate\Database\Seeder;

class AccessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /** Permissions */
        /** SUPER ADMIN PERMISSION */
        DB::table('access')->insert([
            'module' => 'All',
            'slug' => 'all',
            'permission' => 'all',
            'permission_code' => 1,
        ]);
        /** PROFILE MODULE ALL */
        DB::table('access')->insert([
            'module' => 'Profile',
            'slug' => 'profile-all',
            'permission' => 'all',
            'permission_code' => 2,
            
        ]);

        /** REGISTER MODULE  ALL */
        DB::table('access')->insert([
            'module' => 'Register',
            'slug' => 'register-all',
            'permission' => 'all',
            'permission_code' => 2,

        ]);
        /** COMPETITION REGISTRATION ALL */
        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-registration-all',
            'permission' => 'all',
            'permission_code' => 2,
        ]);
        /** USER REGISTRATION ALL */
        DB::table('access')->insert([
            'module' => 'User Registration',
            'slug' => 'user-registration-all',
            'permission' => 'all',
            'permission_code' => 2,
        ]);
        /** ROLES ALL */
        DB::table('access')->insert([
            'module' => 'Roles',
            'slug' => 'roles-all',
            'permission' => 'all',
            'permission_code' => 2,
        ]);
        /** USERS ALL */
        DB::table('access')->insert([
            'module' => 'Users',
            'slug' => 'users-all',
            'permission' => 'all',
            'permission_code' => 2,

        ]);
        /** FEPTARCO INVENTORY ALL */
        DB::table('access')->insert([
            'module' => 'Feptarco Inventory',
            'slug' => 'feptarco-inventory-all',
            'permission' => 'all',
            'permission_code' => 2,
        ]);

        /** FEPTARCO ENROLLMENTS */
        DB::table('access')->insert([
            'module' => 'Competition Enrollment',
            'slug' => 'competition-enrollments',
            'permission' => 'view',
            'permission_code' => 2,
        ]);

        /** PROFILE */
        DB::table('access')->insert([
            'module' => 'Profile',
            'slug' => 'profile-view',
            'permission' => 'view',
            'permission_code' => 3,
           
        ]);
        DB::table('access')->insert([
            'module' => 'Profile',
            'slug' => 'profile-edit',
            'permission' => 'edit',
            'permission_code' => 3,

        ]);
        DB::table('access')->insert([
            'module' => 'Profile Gear',
            'slug' => 'profile-gear-create',
            'permission' => 'create',
            'permission_code' => 3,

        ]);
        DB::table('access')->insert([
            'module' => 'Profile Gear',
            'slug' => 'profile-gear-edit',
            'permission' => 'edit',
            'permission_code' => 3,

        ]);
        DB::table('access')->insert([
            'module' => 'Profile Gear',
            'slug' => 'profile-gear-delete',
            'permission' => 'delete',
            'permission_code' => 3,

        ]);

        DB::table('access')->insert([
            'module' => 'Athletes',
            'slug' => 'athletes-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);

        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-registration-create',
            'permission' => 'create',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-registration-view',
            'permission' => 'confirm',
            'permission_code' => 3,
        ]);

        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-registration-edit',
            'permission' => 'edit',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-registration-delete',
            'permission' => 'delete',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-registration-confirm',
            'permission' => 'confirm',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Competition Registration',
            'slug' => 'competition-type-create',
            'permission' => 'assign',
            'permission_code' => 3,
        ]);


        DB::table('access')->insert([
            'module' => 'Competition Enrollment',
            'slug' => 'competition-enrollment-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);

        DB::table('access')->insert([
            'module' => 'Competition Enrollment',
            'slug' => 'competition-enrollment-create',
            'permission' => 'access',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Competition Enrollment',
            'slug' => 'competition-enrollment-edit',
            'permission' => 'access',
            'permission_code' => 3,
        ]);

        DB::table('access')->insert([
            'module' => 'Athlete Stats',
            'slug' => 'athlete-stats-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'User Registration',
            'slug' => 'user-registration-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'User Registration',
            'slug' => 'user-registration-create',
            'permission' => 'create',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Roles',
            'slug' => 'roles-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Roles',
            'slug' => 'roles-create',
            'permission' => 'create',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Roles',
            'slug' => 'Roles-assign',
            'permission' => 'assign',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Roles',
            'slug' => 'roles-edit',
            'permission' => 'edit',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Roles',
            'slug' => 'roles-delete',
            'permission' => 'delete',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Users',
            'slug' => 'users-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Users',
            'slug' => 'users-create',
            'permission' => 'create',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Users',
            'slug' => 'users-edit',
            'permission' => 'edit',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'users',
            'slug' => 'users-delete',
            'permission' => 'delete',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Feptarco Inventory',
            'slug' => 'feptarco-inventory-view',
            'permission' => 'view',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Feptarco Inventory',
            'slug' => 'feptarco-inventory-create',
            'permission' => 'create',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Feptarco Inventory',
            'slug' => 'feptarco-inventory-edit',
            'permission' => 'edit',
            'permission_code' => 3,
        ]);
        DB::table('access')->insert([
            'module' => 'Feptarco Inventory',
            'slug' => 'feptarco-inventory-delete',
            'permission' => 'delete',
            'permission_code' => 3,
        ]);


    }    
}
