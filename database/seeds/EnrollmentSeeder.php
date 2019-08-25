<?php

use Illuminate\Database\Seeder;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competition_enrollments')->insert([
            'archer_id' => 1,
            'competition_id' => 1,
            'payment_amount' => 40.5,
            'payment_invoice' => 'comprobante.jpg',
            'updated_by' => 2,
            'status' => 1,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('competition_enrollments')->insert([
            'archer_id' => 4,
            'competition_id' => 2,
            'payment_amount' => 50,
            'payment_invoice' => 'comprobante2.jpg',
            'updated_by' => 2,
            'status' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
