<?php

use Illuminate\Database\Seeder;

class ClubsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clubs')->insert([
            'name' => 'ARCHERY CLUB AC',
            'code' => 'arc',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);

        DB::table('clubs')->insert([
            'name' => 'BOW KIDS',
            'code' => 'bks',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);

        DB::table('clubs')->insert([
            'name' => 'ARCO DE BRONCE',
            'code' => 'acb',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);
        DB::table('clubs')->insert([
            'name' => 'ARQUEROS DE CUMBEMAYO',
            'code' => 'adc',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);
        DB::table('clubs')->insert([
            'name' => 'ARQUEROS DEL MAR',
            'code' => 'adm',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);
        DB::table('clubs')->insert([
            'name' => 'ARQUEROS MOLINEROS',
            'code' => 'arm',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);
        DB::table('clubs')->insert([
            'name' => 'CLUB ARCOIRIS',
            'code' => 'cla',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);
        DB::table('clubs')->insert([
            'name' => 'CLUB INTERNACIONAL - AREQUIPA',
            'code' => 'cia',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 0,
        ]);
        DB::table('clubs')->insert([
            'name' => 'UNALM',
            'code' => 'una',
            'details' => '',
            'address' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'number_of_archers' => 2,
        ]);
    }
}
