<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('users')->insert([
            'email' => 'scratchgel@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => 'superadmin-1',
            'dni' => '11111111',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => 1,
            'updated_by' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'superadmin1@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => 'superadmin-2',
            'dni' => '11111112',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'd.zarate@pucp.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => 'superadmin-3',
            'dni' => '11111113',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);

        /** ARCHERS  **/
        DB::table('users')->insert([
            'email' => 'acrucesburga@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144157341-A',
            'dni' => '44157341',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'anakellyzt@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174037986-A',
            'dni' => '74037986',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'cy_morales91@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147062732-C',
            'dni' => '47062732',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'espereyra4@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172452100-E',
            'dni' => '72452100',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'arq.gcruzado@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '148549178-G',
            'dni' => '48549178',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'alfaro.wg@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '145594054-G',
            'dni' => '45594054',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jackygiane@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143251676-J',
            'dni' => '43251676',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jianizts@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146793175-J',
            'dni' => '46793175',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'salcedosinche@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146089332-J',
            'dni' => '46089332',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'juespe_16@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144834713-J',
            'dni' => '44834713',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'karenabigail14@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '145942310-K',
            'dni' => '45942310',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'manuel.e.gutierrez.t@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143576925-M',
            'dni' => '43576925',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'maurovaldezc@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171233840-M',
            'dni' => '71233840',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rodrigo.delapuente@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141049940-R',
            'dni' => '41049940',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'roggers19sm@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147644236-R',
            'dni' => '47644236',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'danny_76h@yahoo.es',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '109784441-A',
            'dni' => '09784441',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'cbellezamo@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170428951-C',
            'dni' => '70428951',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'danielvizquerra@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171249495-D',
            'dni' => '71249495',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ddiegosc@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172555454-D',
            'dni' => '72555454',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'diego.leon1392@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '1721640009-D',
            'dni' => '721640009',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'edwin.alvarez.valdivia@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144222068-E',
            'dni' => '44222068',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'leydafisi@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '161513386-F',
            'dni' => '61513386',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fpaz360@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170979414-F',
            'dni' => '70979414',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jeanpierrewong@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '142293951-J',
            'dni' => '42293951',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jesusderakion@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172913905-J',
            'dni' => '72913905',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'joseqe1711@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172488414-J',
            'dni' => '72488414',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jose.vizquerra@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '107664681-J',
            'dni' => '07664681',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'karensh778@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '175887061-K',
            'dni' => '75887061',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'lisett.fer16@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '148247754-L',
            'dni' => '48247754',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'e.luis.r8@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '145924196-L',
            'dni' => '45924196',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'm99venegas@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172814041-M',
            'dni' => '72814041',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'maritza_lmj@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147182745-M',
            'dni' => '47182745',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'elvisurquia@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172782858-S',
            'dni' => '72782858',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'enracos3@outlook.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146249824-E',
            'dni' => '46249824',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'carla.arbulu@outlock.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173235272–C',
            'dni' => '73235272',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'manuelcacho@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '142244631–M',
            'dni' => '42244631',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'gustavo.ch.alvarez@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => ' 173147356–G',
            'dni' => '73147356',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fchar9@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '1267004492–F',
            'dni' => '267004492',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'cococuenca@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' =>'140791635–J',
            'dni' => '40791635',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'luistantalean7@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '126696753–L',
            'dni' => '26696753',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fatimatantalean@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172696866-M',
            'dni' => '72696866',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'tromobocitosis@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143295161-A',
            'dni' => '43295161',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'chia.miguel@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '140433386-A',
            'dni' => '40433386',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'bettiescorpio82@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141719802-B',
            'dni' => '41719802',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'beatrizoterzi@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '110225329-B',
            'dni' => '10225329',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'Brunodiazllanes@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146329210-B',
            'dni' => '46329210',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'bmalpartida@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146953940-B',
            'dni' => '46953940',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'cesarmcarranza@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170475051-C',
            'dni' => '70475051',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'dch.marcell@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143834369-D',
            'dni' => '43834369',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'garcia.diego61@yahoo.es',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174813269-D',
            'dni' => '74813269',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'toshirotaya@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144066743-E',
            'dni' => '44066743',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fermolina.92@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172299494-F',
            'dni' => '72299494',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fiorellainglesi@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '107870625-F',
            'dni' => '07870625',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jimenezgene@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '114611395-G',
            'dni' => '14611395',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'balto_gef@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '140105932-G',
            'dni' => '40105932',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'giancarloamprimo@yahoo.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '109385021-G',
            'dni' => '09385021',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'gracemarcellb@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '106985593-G',
            'dni' => '06985593',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'gustavo2992@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141921517-G',
            'dni' => '41921517',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'hrjauregui@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '106790303-H',
            'dni' => '06790303',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jacky.0503@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143391914-J',
            'dni' => '43391914',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jparedessumari@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '121437326-J',
            'dni' => '21437326',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jhviviani@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141462414-J',
            'dni' => '41462414',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'spentor@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143401369-J',
            'dni' => '43401369',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jj_goicochea@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143134212-J',
            'dni' => '43134212',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'JUANPABLORSC@GMAIL.COM',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '140031494-J',
            'dni' => '40031494',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'gurkhainca@yahoo.com.ar',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '108828788-J',
            'dni' => '08828788',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);

        DB::table('users')->insert([
            'email' => 'luca.amprimo@yahoo.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '177804373-L',
            'dni' => '77804373',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'luigi.amprimo@icloud.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '160532506-L',
            'dni' => '60532506',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'cecybon@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171362333-J',
            'dni' => '74383763',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'alfredoleonsan@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170918818-M',
            'dni' => '70918818',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'marpzqn@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170364451-M',
            'dni' => '70364451',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'milagros15_trujillo@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '176608993-M',
            'dni' => '76608993',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'hajimekmss@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '175653612-O',
            'dni' => '75653612',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'os_gares@yahoo.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '108859991-O',
            'dni' => '08859991',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'oskar.garcia.riveros@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146487084-O',
            'dni' => '46487084',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'p.pazzaglia94@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172630110-P',
            'dni' => '72630110',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'raforafo1@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147150163-R',
            'dni' => '47150163',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'james_ab@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172789471-R',
            'dni' => '72789471',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'romi.arw@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170508299-R',
            'dni' => '70508299',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ronald.sk-98-12@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173206292-R',
            'dni' => '73206292',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rlavadod@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147160504-R',
            'dni' => '47160504',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'santiagosr89@outlook.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170673412-S',
            'dni' => '70673412',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'vaniarch@outlook.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '140455022-V',
            'dni' => '40455022',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'chulsy@hptmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '19279060-V',
            'dni' => '9279060',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'adanieldcb@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146860222-A',
            'dni' => '46860222',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'beatrizuribe_gc@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171361677-A',
            'dni' => '71361677',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'barbarafloresberrocal@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170298352-B',
            'dni' => '70298352',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'elendil147@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170190183-C',
            'dni' => '70190183',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'DIANE.RU@OUTLOOK.COM.PE',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147607868-D',
            'dni' => '47607868',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rauldiazp18@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171854464-D',
            'dni' => '71854464',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'earria99@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173351381-E',
            'dni' => '73351381',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fjms1976@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '1001223631-F',
            'dni' => '001223631',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'g4fjoshua@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172307344-J',
            'dni' => '72307344',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'leocashpa@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170163916-L',
            'dni' => '70163916',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'art_seg@yahoo.es',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '109799431-L',
            'dni' => '09799431',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'mavibl26@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172474662-M',
            'dni' => '72474662',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'millescasb@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173687343-M',
            'dni' => '73687343',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rodrigotellomanrique@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '176921322-R',
            'dni' => '76921322',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'sebastian08oliver@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171950885-S',
            'dni' => '71950885',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'stephaniecesti@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144445654-S',
            'dni' => '44445654',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'erickug1@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '107626738-E',
            'dni' => '07626738',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'adithyaliaga@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '147070336-A',
            'dni' => '47070336',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'eberthcastillo1972@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '109671185-A',
            'dni' => '09671185',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'aleska.burga@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170657374-A',
            'dni' => '70657374',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'lxsbenavente@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141183921-A',
            'dni' => '41183921',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'almudena.andaluz@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173222268-A',
            'dni' => '73222268',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'alyssamchaparro@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173184236-A',
            'dni' => '73184236',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'armandcabezas@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '142719060-A',
            'dni' => '42719060',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'brunella_ubillus@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174501482-B',
            'dni' => '74501482',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'diegoferstu@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170844885-D',
            'dni' => '70844885',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'emily.kina97@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174703153-E',
            'dni' => '74703153',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'tirodefensivo@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '107852336-F',
            'dni' => '07852336',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fernando.coello.v@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146187898-F',
            'dni' => '46187898
            
            ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'sanchez_fjl@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '1000765751-F',
            'dni' => '000765751',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'gabisuberoba@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '192040878-G',
            'dni' => '92040878',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'tioganzua@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141091758-G',
            'dni' => '41091758',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'Ignaciatoro@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '1001336333-I',
            'dni' => '001336333',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'coco@well-horse.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '108221833-J',
            'dni' => '08221833',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jurgen@lemke.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '109272733-J',
            'dni' => '09272733',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'luluufigueroa2005@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146048733-L',
            'dni' => '46048733',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ea_mariafe@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173672076-M',
            'dni' => '73672076',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ignaciajimeneztorres@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '119564062-9-M',
            'dni' => '195640629',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ma_josevera@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '11687834-M',
            'dni' => '1687834',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'antonellagianino2307@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171362649-M',
            'dni' => '71362649',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'nicolasvasquezgandolfo@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '176123328-N',
            'dni' => '76123328',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'nicolasmalagaq@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174803079-N',
            'dni' => '74803079',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'nrcarrascoh@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174876806-N',
            'dni' => '74876806',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'oscaraspillaga90@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146503794-O',
            'dni' => '46503794',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rarciniega@fastmail.fm',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '176939676-R',
            'dni' => '76939676',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rabt20@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172204148-R',
            'dni' => '72204148',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ricardo.torres.aragon@limamakers.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170023283-R',
            'dni' => '70023283',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ruthhelfer@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '109340104-R',
            'dni' => '09340104',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'sebastianjfalconl0203@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172630172-S',
            'dni' => '72630172',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'tulio.carrasco@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '106285540-T',
            'dni' => '06285540',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'vimuro@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172556112-V',
            'dni' => '72556112',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'wguevarao@g-in.com.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '146496450-W',
            'dni' => '46496450',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'asalazardc@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '110610516-A',
            'dni' => '10610516',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'moali_alexander@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171335803-A',
            'dni' => '71335803',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ami.galgon@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172103469-A',
            'dni' => '72103469',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'arqueria2019@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '110171401-A',
            'dni' => '10171401',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'rodo.meneses@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170405624-A',
            'dni' => '70405624',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'alr3001@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '103896065-B',
            'dni' => '03896065',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'edwin_castillo2002@yahoo.es',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '141218456-E',
            'dni' => '41218456',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fperez@pucp.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '107954548-F',
            'dni' => '07954548',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fernandotello@yahoo.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '140690385-F',
            'dni' => '40690385',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'hugo.cussato@aai.com.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '107260672-H',
            'dni' => '07260672',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'jouvetb@yahoo.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '16282263-J',
            'dni' => '6282263',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'marialg2008@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '100323079-M',
            'dni' => '00323079',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'percysampen@msn.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '140911993-P',
            'dni' => '40911993',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'sebaslr.40s@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170443206-S',
            'dni' => '70443206',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'williamob97@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172533543-W',
            'dni' => '72533543',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'alvaro.bustamante.n@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '130849818-A',
            'dni' => '30849818',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ariane_ratona@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174166641-A',
            'dni' => '74166641',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'a.velasquez27032003@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172126178-B',
            'dni' => '72126178',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'brunolopezvilla@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170795492-B',
            'dni' => '70795492',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'celesteportilla@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174606606-C',
            'dni' => '74606606',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'carloskriete4@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173044837-C',
            'dni' => '73044837',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'patric_rp136@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170320686-C',
            'dni' => '70320686',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'cecilia_estefania_16@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '173078253-C',
            'dni' => '73078253',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ceciliahancco@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172638992-C',
            'dni' => '72638992',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'christian.garo@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '143171427-C',
            'dni' => '43171427',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'dani.yh03@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171236951-D',
            'dni' => '71236951',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'diana.calle@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '145121071-D',
            'dni' => '45121071',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'maria.herrera.lobaton@ucsp.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170838455-F',
            'dni' => '70838455',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'nathy_64hp@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171257796-G',
            'dni' => '71257796',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'gonzalo3004@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144688988-G',
            'dni' => '44688988',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'h.andresvp27@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172942146-H',
            'dni' => '72942146',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'ire-alcira@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '129600977-I',
            'dni' => '29600977',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'angelabsm18@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '129519821-J',
            'dni' => '29519821',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'evertstephen@yahoo.es',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '142650050-J',
            'dni' => '990759056',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'perez204020@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170441712-J',
            'dni' => '70441712',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'janbegazov@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172000890-J',
            'dni' => '72000890',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'raton_pichin@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174166648-J',
            'dni' => '74166648',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'alafernandezabuid@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '129267714-L',
            'dni' => '29267714',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'malenarequipa@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '129601836-M',
            'dni' => '29601836',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'pam@groomingperu.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '144945863-P',
            'dni' => '44945863',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'paola.rosario.hc@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172638999-P',
            'dni' => '72638999',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'pilarlandeo@speedy.com.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '129639038-P',
            'dni' => '29639038',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'santiprado_00@outlook.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170348383-S',
            'dni' => '70348383',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'kguevarapv@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171058073-V',
            'dni' => '71058073',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20161108@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170800637-A',
            'dni' => '70800637',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'tesmely@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '181595583-C',
            'dni' => '81595583',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20161053@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174941691-D',
            'dni' => '74941691',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20170320@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '174131189-E',
            'dni' => '74131189',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'fernando.chancos@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171627584-F',
            'dni' => '71627584',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'arboccog@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '175932037-G',
            'dni' => '75932037',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20160159@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '148006257-I',
            'dni' => '48006257',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'naujfe@hotmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '124718927-J',
            'dni' => '24718927',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20131320@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '171778626-R',
            'dni' => '71778626',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20120209@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '172655654-S',
            'dni' => '72655654',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => '20171215@lamolina.edu.pe',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => '170830219-A',
            'dni' => '70830219',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        DB::table('users')->insert([
            'email' => 'juez@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => 'j-1',
            'dni' => '1111111',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);

        DB::table('users')->insert([
            'email' => 'entrenador@gmail.com',
            'password' => bcrypt('f3pt7rc02019'),
            'feptarco_id' => 'e-1',
            'dni' => '111112',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'active' => 1,
            'created_by' => $this->getUserId('superadmin-1'),
            'updated_by' => $this->getUserId('superadmin-1')
        ]);
        
    }

    private function getUserId($feptarcoId) {
        $user = \App\Model\User::where('feptarco_id', $feptarcoId)->get()->first();
        return $user->id;
    }
}
