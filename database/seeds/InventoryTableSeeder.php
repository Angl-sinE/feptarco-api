<?php

use Illuminate\Database\Seeder;

class InventoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('inventory')->insert([
            'name' => 'Arco Compuesto FEP',
            'code' => 'GR677',
            'brand' => 'Esmerald',
            'quantity' => 10,
            'federation_owned' => true,
            'type' => 'bow',
            'owned_by' => $this->getUserId('superadmin-1'),
            'asigned_to' => $this->getUserId('144157341-A'),
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);

        DB::table('inventory')->insert([
            'name' => 'Arco Compuesto GR',
            'code' => 'GR515',
            'brand' => 'Esmerald',
            'quantity' => 1,
            'federation_owned' => false,
            'type' => 'bow',
            'owned_by' => $this->getUserId('144157341-A'),
            'asigned_to' => $this->getUserId('144157341-A'),
            'created_by' => $this->getUserId('144157341-A'),
            'updated_by' => $this->getUserId('144157341-A'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);

        DB::table('inventory')->insert([
            'name' => 'Arco Recurvo Amazon',
            'code' => 'AM66',
            'brand' => 'Esmerald',
            'quantity' => 2,
            'federation_owned' => false,
            'type' => 'bow',
            'owned_by' => $this->getUserId('174037986-A'),
            'asigned_to' => $this->getUserId('174037986-A'),
            'created_by' => $this->getUserId('174037986-A'),
            'updated_by' => $this->getUserId('174037986-A'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);

         DB::table('inventory')->insert([
            'name' => 'Flecha Amazon A2',
            'code' => 'AM69',
            'brand' => 'Esmerald',
            'quantity' => 25,
            'federation_owned' => true,
            'type' => 'arrow',
            'owned_by' => $this->getUserId('superadmin-1'),
            'asigned_to' => $this->getUserId('174037986-A'),
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);
        DB::table('inventory')->insert([
            'name' => 'Flecha Amazon A3',
            'code' => 'AM70',
            'brand' => 'Esmerald',
            'quantity' => 80,
            'federation_owned' => true,
            'type' => 'arrow',
            'owned_by' => $this->getUserId('superadmin-1'),
            'asigned_to' => $this->getUserId('superadmin-1'),
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);


        DB::table('inventory')->insert([
            'name' => 'Flecha Amazon',
            'code' => 'AM71',
            'brand' => 'Esmerald',
            'quantity' => 2,
            'federation_owned' => false,
            'type' => 'arrow',
            'owned_by' => $this->getUserId('174037986-A'),
            'asigned_to' => $this->getUserId('174037986-A'),
            'created_by' => $this->getUserId('174037986-A'),
            'updated_by' => $this->getUserId('174037986-A'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);

        DB::table('inventory')->insert([
            'name' => 'Plumas Nioh',
            'code' => 'NI00',
            'brand' => 'GreenL',
            'quantity' => 10,
            'federation_owned' => false,
            'type' => 'arrow',
            'owned_by' => $this->getUserId('174037986-A'),
            'asigned_to' => $this->getUserId('174037986-A'),
            'created_by' => $this->getUserId('174037986-A'),
            'updated_by' => $this->getUserId('174037986-A'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);

        DB::table('inventory')->insert([
            'name' => 'Dragonera Tamagochi',
            'code' => 'DRAI',
            'brand' => 'Hood',
            'quantity' => 10,
            'federation_owned' => true,
            'type' => 'accessory',
            'owned_by' => $this->getUserId('superadmin-1'),
            'asigned_to' => $this->getUserId('superadmin-1'),
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);


        DB::table('inventory')->insert([
            'name' => 'Dragonera Amazon',
            'code' => 'DRA66',
            'brand' => 'Hood',
            'quantity' => 2,
            'federation_owned' => false,
            'type' => 'accessory',
            'owned_by' => $this->getUserId('174037986-A'),
            'asigned_to' => $this->getUserId('174037986-A'),
            'created_by' => $this->getUserId('174037986-A'),
            'updated_by' => $this->getUserId('174037986-A'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);

        DB::table('inventory')->insert([
            'name' => 'Posa Arco GA',
            'code' => 'GAPAC',
            'brand' => 'Hood',
            'quantity' => 1,
            'federation_owned' => false,
            'type' => 'accessory',
            'owned_by' => $this->getUserId('174037986-A'),
            'asigned_to' => $this->getUserId('174037986-A'),
            'created_by' => $this->getUserId('174037986-A'),
            'updated_by' => $this->getUserId('174037986-A'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),       
           
        ]);
    }

    private function getUserId($feptarcoId) {
        $user = \App\Model\User::where('feptarco_id', $feptarcoId)->get()->first();
        return $user->id;
    }
}
