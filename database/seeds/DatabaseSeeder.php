<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            AccessTableSeeder::class,
            ClubsTableSeeder::class,
            RoleAccessSeederTable::class,
            UsersTableSeeder::class,
            UserRoleTableSeeder::class,
            InventoryTableSeeder::class,
            CompetitionsTableSeeder::class,
            EnrollmentSeeder::class

        ]);
        
    }
}
