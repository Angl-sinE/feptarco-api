<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->insert([
            'name' => 'superadmin',
            'name_canonical' => 'SuperAdmin',
            'is_admin' => true,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'description' => 'All access super user',
            'status' => 1,

        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'name_canonical' => 'Feptarco Admin',
            'is_admin' => true,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'description' => 'Federation member',
            'status' => 1,
        ]);
        DB::table('roles')->insert([
            'name' => 'archer',
            'name_canonical' => 'Feptarco archer',
            'is_admin' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'description' => 'Archer user',
            'status' => 1,

        ]);
        DB::table('roles')->insert([
            'name' => 'judge',
            'name_canonical' => 'Feptarco Judge',
            'is_admin' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'description' => 'Judge user',
            'status' => 0,

        ]);

        DB::table('roles')->insert([
            'name' => 'trainer',
            'name_canonical' => 'Feptarco Trainer',
            'is_admin' => false,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'description' => 'Trainer user',
            'status' =>0,

        ]);
              
    }
}
