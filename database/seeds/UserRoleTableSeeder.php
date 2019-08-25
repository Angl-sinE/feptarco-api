<?php

use Illuminate\Database\Seeder;

class UserRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('superadmin-1'),
            'role_id' => $this->getRoleId('superadmin')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('superadmin-2'),
            'role_id' => $this->getRoleId('superadmin')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('superadmin-3'),
            'role_id' => $this->getRoleId('superadmin')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('e-1'),
            'role_id' => $this->getRoleId('trainer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('j-1'),
            'role_id' => $this->getRoleId('judge')
        ]);

        DB::table('admin_profiles')->insert([
            'first_names' => 'Alejandra',
            'last_names' => 'Ugarte',
            'gender' => 'F',
            'age' => 28,
            'birth_date' => new DateTime('02-07-1990'),
            'current_address' => null,
            'phone_number' => null,
            'employment' => 'Programadora',
            'civil_status' => 'Soltera',
            'status' => 1,
            'user_id' => $this->getUserId('superadmin-2'),
        ]);
        DB::table('admin_profiles')->insert([
            'first_names' => 'Angel',
            'last_names' => 'Flores',
            'gender' => 'M',
            'age' => 28,
            'birth_date' => new DateTime('23-08-1990'),
            'current_address' => null,
            'phone_number' => null,
            'employment' => 'Programador',
            'civil_status' => 'Soltero',
            'status' => 1,
            'user_id' => $this->getUserId('superadmin-1'),

        ]);
        DB::table('admin_profiles')->insert([
            'first_names' => 'Dennis',
            'last_names' => 'Zarate',
            'gender' => 'M',
            'age' => 30,
            'birth_date' => new DateTime('23-08-1988'),
            'current_address' => null,
            'phone_number' => null,
            'employment' => 'Programador',
            'civil_status' => 'Soltero',
            'status' => 1,
            'user_id' => $this->getUserId('superadmin-3'),
        ]);
        DB::table('judge_profiles')->insert([
            'first_names' => 'Ricardo Jose',
            'last_names' => 'Juez Juez',
            'gender' => 'M',
            'age' => 30,
            'birth_date' => new DateTime('23-08-1988'),
            'current_address' => null,
            'phone_number' => null,
            'employment' => 'Juez',
            'civil_status' => 'Soltero',
            'status' => 1,
            'user_id' => $this->getUserId('j-1'),
        ]);
        DB::table('trainer_profiles')->insert([
            'first_names' => 'Gimena Alicia',
            'last_names' => 'Entrenadora Entrenadora',
            'gender' => 'F',
            'age' => 30,
            'birth_date' => new DateTime('23-08-1988'),
            'current_address' => null,
            'phone_number' => null,
            'employment' => 'Entrenadora',
            'civil_status' => 'Soltera',
            'status' => 1,
            'user_id' => $this->getUserId('e-1'),
        ]);

        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144157341-A'),
            'role_id' => $this->getRoleId('archer')
        ]);

        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174037986-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147062732-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172452100-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('148549178-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('145594054-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143251676-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146793175-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146089332-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144834713-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('145942310-K'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143576925-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171233840-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141049940-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147644236-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('109784441-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170428951-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171249495-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172555454-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('1721640009-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144222068-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('161513386-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170979414-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('142293951-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172913905-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172488414-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('107664681-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('175887061-K'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('148247754-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('145924196-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172814041-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147182745-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172782858-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146249824-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173235272–C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('142244631–M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('1267004492–F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140791635–J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('126696753–L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172696866-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143295161-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140433386-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141719802-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('110225329-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146329210-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146953940-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170475051-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143834369-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144066743-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172299494-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('107870625-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('114611395-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140105932-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('109385021-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('106985593-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141921517-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('106790303-H'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143391914-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171362333-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('121437326-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141462414-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143401369-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143134212-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140031494-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('108828788-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('177804373-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170918818-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170364451-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('176608993-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('175653612-O'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('108859991-O'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146487084-O'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172630110-P'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147150163-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172789471-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170508299-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173206292-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147160504-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170673412-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140455022-V'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('19279060-V'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146860222-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171361677-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170298352-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170190183-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147607868-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171854464-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173351381-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('1001223631-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172307344-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170163916-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('109799431-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172474662-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173687343-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('176921322-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171950885-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144445654-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('107626738-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('147070336-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('109671185-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170657374-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141183921-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173222268-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173184236-A'),
            'role_id' => $this->getRoleId('archer')
        ]);

        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174501482-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170844885-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174703153-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('107852336-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('1000765751-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('192040878-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141091758-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('1001336333-I'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('108221833-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('109272733-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146048733-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173672076-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('11687834-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171362649-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('176123328-N'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174803079-N'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174876806-N'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146503794-O'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('176939676-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170023283-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('109340104-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172630172-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('106285540-T'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172556112-V'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('146496450-W'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('110610516-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171335803-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172103469-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('110171401-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170405624-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('103896065-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('141218456-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('107954548-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140690385-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('107260672-H'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('16282263-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('100323079-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('140911993-P'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170443206-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172533543-W'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('130849818-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174166641-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172126178-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170795492-B'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174606606-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173044837-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170320686-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('173078253-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172638992-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('143171427-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171236951-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('145121071-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170838455-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171257796-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144688988-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172942146-H'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('129600977-I'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('129519821-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('142650050-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170441712-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172000890-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174166648-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('129267714-L'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('129601836-M'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('144945863-P'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172638999-P'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('129639038-P'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170348383-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171058073-V'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170800637-A'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('181595583-C'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174941691-D'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('174131189-E'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171627584-F'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('175932037-G'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('148006257-I'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('124718927-J'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('171778626-R'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('172655654-S'),
            'role_id' => $this->getRoleId('archer')
        ]);
        DB::table('user_roles')->insert([
            'user_id' => $this->getUserId('170830219-A'),
            'role_id' => $this->getRoleId('archer')
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'Alberto',
            'last_names' => 'Cruces Burga',
            'gender' => 'M',
            'age' => 31,
            'birth_date' => new DateTime('24-02-1987'),
            'current_address' => 'Av. Paseo de la República 6385 dpto 801 Miraflores',
            'phone_number' => '996204110',
            'current_category' => '0 m',
            'current_mode' => 'Raso',
            'joined_date' => null,
            'civil_status' => 'soltero',
            'employment' => 'Asesor Jurisdiccional  - Tribunal Constitucional',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'amount_training_hours' => '3',
            'years_of_experience' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('144157341-A'),
            'club_id' => 1

        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Ana Kelly',
            'last_names' => 'Zarate Torres',
            'gender' => 'F',
            'age' => 20,
            'birth_date' => new DateTime('02-07-1997'),
            'current_address' => 'Calle Las Palmas N° 135 Dpto 1- La Molina - Lima',
            'phone_number' => '940434242',
            'federated' => false,
            'current_category' => '30 m',
            'current_mode' => 'Recurvo',
            'joined_date' => null,
            'civil_status' => 'soltero',
            'employment' => 'Estudiante /URP',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '3',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('174037986-A'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Cynthia',
            'last_names' => 'Morales',
            'gender' => 'F',
            'age' => 26,
            'birth_date' => new DateTime('28-06-1991'),
            'current_address' => 'Av. Buena vista 400 dpto,  E 201- San Borja',
            'phone_number' => '980115555',
            'current_category' => '50 m',
            'current_mode' => 'Recurvo',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Publicista / Diseñadora Digital',
            'training_days' => 'Domingo',
            'training_hour_start' => new DateTime('16:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '4',
            'amount_training_hours' => '2',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('147062732-C'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Ernesto Sabino',
            'last_names' => 'Pereyra Arias',
            'gender' => 'M',
            'age' => 14,
            'birth_date' => new DateTime('03-03-2004'),
            'current_address' => null,
            'phone_number' => null,
            'current_category' => '20 m',
            'current_mode' => 'Raso',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('16:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '6 m',
            'amount_training_hours' => '2',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172452100-E'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Gabriela Maria Celeste',
            'last_names' => 'Cruzado Cavero',
            'gender' => 'F',
            'age' => 23,
            'birth_date' => new DateTime('22-10-1994'),
            'current_address' => 'av. San felipe 530 dpto 204, T 2 - Jesus Maria',
            'phone_number' => '922346279',
            'current_category' => '20 m',
            'current_mode' => 'Recurvo',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'estudiante de Arquitectura',
            'training_days' => 'Sabado',
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '2 m',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('148549178-G'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Gustavo Alfaro',
            'last_names' => 'Wong',
            'gender' => 'M',
            'age' => 29,
            'birth_date' => new DateTime('1-02-1989'),
            'current_address' => 'Jr. Huascar 1378 DPTO. 508 - Jesús María - Lima',
            'phone_number' => '973342265',
            'current_category' => '20 m',
            'current_mode' => 'Recurvo',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Ingeniero Electrónico / PRECISIÓN PERÚ / Ventas Internas',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '3 m',
            'amount_training_hours' => 3,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('145594054-G'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jackelyne Gianella',
            'last_names' => 'Falero Martinez',
            'gender' => 'F',
            'age' => 32,
            'birth_date' => new DateTime('14-10-1985'),
            'current_address' => 'Jr. Santa Catalina 114 - SMP',
            'phone_number' => '983462539',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Economista',
            'training_days' => 'Domingo',
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '3 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143251676-J'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Janina',
            'last_names' => 'Zárate Torres',
            'gender' => 'F',
            'age' => 27,
            'birth_date' => new DateTime('4-02-1991'),
            'current_address' => 'Calle Las Palmas N° 135 Dpto 1 - La Molina - Lima',
            'phone_number' => '991980633',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Abogada/Corporacion Zator ',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '4 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('146793175-J'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jhosepy Nalé',
            'last_names' => 'Salcedo sinche',
            'gender' => 'M',
            'age' => 28,
            'birth_date' => new DateTime('6-10-1989'),
            'current_address' => 'Prolongacion Huanuco 2228 dpto. 102',
            'phone_number' => '981554336',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'estudiante/ secretario',
            'training_days' => 'Domingo',
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('146089332-J'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Julio Esteban',
            'last_names' => 'Perez Garcia',
            'gender' => 'M',
            'age' => 30,
            'birth_date' => new DateTime('16-10-1987'),
            'current_address' => 'Ca. Los Sinsontes 130 - Int 201',
            'phone_number' => '966800508',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => null,
            'training_days' => 'Domingo',
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '3 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('144834713-J'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Karen',
            'last_names' => 'Castillo Casternoque',
            'gender' => 'F',
            'age' => 28,
            'birth_date' => new DateTime('14-09-1986'),
            'current_address' => 'Jr. Salaverry 361 -Magdalena del Mar',
            'phone_number' => '976041927',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Estudiante',
            'training_days' => 'Sabado',
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '2 m',
            'amount_training_hours' => '15',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('145942310-K'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Manuel Eduardo',
            'last_names' => ' Gutiérrez Torres',
            'gender' => 'M',
            'age' => 31,
            'birth_date' => new DateTime('26-05-1986'),
            'current_address' => 'Cl. Aldabas 127 Urb. Las Gardenias - Surco',
            'phone_number' => '997885788',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Médico / Universidad Científica del Sur / Jefe de Práctica - Fisiopatología',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '2 m',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143576925-M'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Mauro Sebastián',
            'last_names' => 'Valdez Campos',
            'gender' => 'M',
            'age' => 15,
            'birth_date' => new DateTime('21-02-2003'),
            'current_address' => 'Doña Raquel, Los Rosales, Surco',
            'phone_number' => '934055262',
            'current_mode' => 'Raso',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('16:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '7 m',
            'amount_training_hours' => '2',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('171233840-M'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Rodrigo de la Puente',
            'last_names' => 'Pflucker',
            'gender' => 'M',
            'age' => 36,
            'birth_date' => new DateTime('8-05-1981'),
            'current_address' => 'Tarragona 191 - Santiago de Surco',
            'phone_number' => '991688075',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'abogado',
            'training_days' => 'Sabado',
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:30:00'),
            'years_of_experience' => '1 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('141049940-R'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Roggers',
            'last_names' => 'SALDAÑA MENDOCILLA',
            'gender' => 'M',
            'age' => 26,
            'birth_date' => new DateTime('10-02-1992'),
            'current_address' => 'Baquijano y Carrillo Nro 1026 - La Esperanza',
            'phone_number' => '921923602',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Ingeniero Electrónico / GMD / Analista de Calidad',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '3 m',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('147644236-R'),
            'club_id' => 1
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Abrahan',
            'last_names' => 'Herrera García',
            'gender' => 'M',
            'age' => 42,
            'birth_date' => new DateTime('11-05-1976'),
            'current_address' => 'Jr. Mariscal Caceres 302 interior 1',
            'phone_number' => '992370090',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Sug Gerente en la empresa H & G Autopartes Universal',
            'training_days' => null,
            'training_hour_start' => new DateTime('17:30:00'),
            'training_hour_end' => new DateTime('21:00:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => '2:30',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('109784441-A'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Carla Patricia',
            'last_names' => 'Belleza Moncada',
            'gender' => 'F',
            'age' => 29,
            'birth_date' => new DateTime('11-03-1989'),
            'current_address' => 'Calle 13 N° 106 Urb. Los Precursores, Santiago de Surco',
            'phone_number' => '987369002',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Traductora Freelance / Profesora de Idiomas IEP. El Maestro Redentor',
            'training_days' => null,
            'training_hour_start' => new DateTime('19:30:00'),
            'training_hour_end' => new DateTime('21:00:00'),
            'years_of_experience' => '7 m',
            'amount_training_hours' => '2:30',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('170428951-C'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Daniel',
            'last_names' => 'Vizquerra Flores',
            'gender' => 'M',
            'age' => 25,
            'birth_date' => new DateTime('4-08-1992'),
            'current_address' => 'Av. Los laureles mz k lt 4 Urb el club huachipa etapa 1',
            'phone_number' => '988334612',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => new DateTime('06:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 y 6 m',
            'amount_training_hours' => '6',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('171249495-D'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'David Diego',
            'last_names' => 'Segura Cerna',
            'gender' => 'M',
            'age' => 20,
            'birth_date' => new DateTime('13-12-1997'),
            'current_address' => 'Jr.Pascual de Vivero1411 DptoE -Magdalena del Mar',
            'phone_number' => '954708772',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Universitario',
            'training_days' => null,
            'training_hour_start' => new DateTime('10:00:00'),
            'training_hour_end' => new DateTime('12:00:00'),
            'years_of_experience' => null,
            'amount_training_hours' => '2',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172555454-D'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Diego André',
            'last_names' => 'León Torre',
            'gender' => 'M',
            'age' => 25,
            'birth_date' => new DateTime('13-10-1992'),
            'current_address' => 'Jr. Paseo del Prado Mz. C Lt. 2, Urb. Portada del Sol, 1era etapa, La Molina.',
            'phone_number' => '948102743',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante/Universidad San Ignacio de Loyola/Relaciones Internacionales',
            'training_days' => null,
            'training_hour_start' => new DateTime('10:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1y 5 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('1721640009-D'),
            'club_id' => 3
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'EDWIN MANUEL',
            'last_names' => 'ALVAREZ VALDIVIA',
            'gender' => 'M',
            'age' => 31,
            'birth_date' => new DateTime('16-01-1987'),
            'current_address' => 'C/. Monet 165, San Borja',
            'phone_number' => '997654402',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Docente/Universidad de Lima/Docente ingeniería Industrial e Ingeniería de sistemas',
            'training_days' => null,
            'training_hour_start' => new DateTime('08:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '10 y',
            'amount_training_hours' => '7',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('144222068-E'),
            'club_id' => 3
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'FARID GABRIEL',
            'last_names' => 'LLAPAPASCA FIGUEROA',
            'gender' => 'M',
            'age' => 12,
            'birth_date' => new DateTime('17-12-2008'),
            'current_address' => 'CA. LOS COMPOSITORES MZ E4 LT 55 URB MATELLINI - CHORRILLOS',
            'phone_number' => null,
            'current_mode' => 'Recurvo',
            'current_category' => '0 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => '4TO GRADO PRIMARIA - COLEGIO PAMER BARRANCO',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('161513386-F'),
            'club_id' => 3
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'Franco David',
            'last_names' => 'Paz Chanta',
            'gender' => 'M',
            'age' => 25,
            'birth_date' => new DateTime('5-12-1992'),
            'current_address' => 'Pr. Parinacochas 820- La Victoria',
            'phone_number' => '944520085',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('10:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 y 6 m',
            'amount_training_hours' => '6',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('170979414-F'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jean Pierre',
            'last_names' => 'Wong Chu',
            'gender' => 'M',
            'age' => 33,
            'birth_date' => new DateTime('4-03-1984'),
            'current_address' => 'jiron Luis Dextre Mz X Lote 15 4to  piso',
            'phone_number' => '995288820',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'gmd/analista de calidad',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '3 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('142293951-J'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jesús Antonio',
            'last_names' => 'Vargas Araujo',
            'gender' => 'M',
            'age' => 16,
            'birth_date' => new DateTime('23-07-2001'),
            'current_address' => 'JR. LAS VERDOLAGAS 814 PDRO 10 URB. LAS FLORES SJL',
            'phone_number' => '6089934',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('07:00:00'),
            'training_hour_end' => new DateTime('10:00:00'),
            'years_of_experience' => '6 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172913905-J'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'José Jesús ',
            'last_names' => 'Quevedo Elescano ',
            'gender' => 'M',
            'age' => 16,
            'birth_date' => new DateTime('17-11-1999'),
            'current_address' => 'Gral. Garzon 839 Dpto. C - Jesús María',
            'phone_number' => '983409848',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '10 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172488414-J'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jose Victor',
            'last_names' => 'Vizquerra Torres',
            'gender' => 'M',
            'age' => 68,
            'birth_date' => new DateTime('24-07-1949'),
            'current_address' => 'Av. Los laureles mz k lt 4 Urb el club huachipa etapa 1',
            'phone_number' => '999857591',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Trabajador Independiente',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '1y 5 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('107664681-J'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Karen Milagros',
            'last_names' => 'Salas Huamaní',
            'gender' => 'F',
            'age' => 29,
            'birth_date' => new DateTime('7-07-1998'),
            'current_address' => 'Av.del aire 1025 dpto G2-502- San Luis',
            'phone_number' => '947533316',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'estudiante/ Universidad San Martín de Porres/ Odontología',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '1y 5 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('175887061-K'),
            'club_id' => 3
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'Lisett',
            'last_names' => 'Fernández Calderón',
            'gender' => 'F',
            'age' => 24,
            'birth_date' => new DateTime('16-04-1994'),
            'current_address' => 'Santa Rosa 188, El Agustino. Lima 10',
            'phone_number' => '956329972',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casada',
            'employment' => 'Diseñadora',
            'training_days' => null,
            'training_hour_start' => new DateTime('07:00:00'),
            'training_hour_end' => new DateTime('10:00:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('148247754-L'),
            'club_id' => 3
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'Luis',
            'last_names' => 'Espinal Romani',
            'gender' => 'M',
            'age' => 28,
            'birth_date' => new DateTime('7-09-1989'),
            'current_address' => 'calle 3 #133 Urb.Carabayllo Comas',
            'phone_number' => '940663398',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Estudiante Universitario',
            'training_days' => null,
            'training_hour_start' => new DateTime('07:00:00'),
            'training_hour_end' => new DateTime('09:00:00'),
            'years_of_experience' => '1 y 6 m',
            'amount_training_hours' => '2',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('145924196-L'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Mario Antonio',
            'last_names' => 'Venegas Rivas',
            'gender' => 'M',
            'age' => 19,
            'birth_date' => new DateTime('16-02-1999'),
            'current_address' => 'tiburcio rios 478',
            'phone_number' => '986915758',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'soltero',
            'employment' => 'Estudiante/Universidad Privada del Norte/Psicologia',
            'training_days' => null,
            'training_hour_start' => new DateTime('14:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 y 3 m',
            'amount_training_hours' => '4',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172814041-M'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Maritza Lucía',
            'last_names' => 'Meza Juárez ',
            'gender' => 'F',
            'age' => 26,
            'birth_date' => new DateTime('21-07-1991'),
            'current_address' => 'Calle eduardo rosales 130 San Borja ',
            'phone_number' => '965945900',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'cirujano dentista / CROE / Odontóloga general',
            'training_days' => null,
            'training_hour_start' => new DateTime('14:30:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 y 6 m',
            'amount_training_hours' => '3:30',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('147182745-M'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Sebastián Abdul',
            'last_names' => 'Urquía Lima',
            'gender' => 'M',
            'age' => 15,
            'birth_date' => new DateTime('18-06-2002'),
            'current_address' => 'Pasaje Tupac Amaru 106 El Agustino',
            'phone_number' => '967672183',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '4 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172782858-S'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Sebastián Abdul',
            'last_names' => 'Urquía Lima',
            'gender' => 'M',
            'age' => 15,
            'birth_date' => new DateTime('18-06-2002'),
            'current_address' => 'Pasaje Tupac Amaru 106 El Agustino',
            'phone_number' => '967672183',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '4 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172782858-S'),
            'club_id' => 3
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Enrique Antonio',
            'last_names' => 'Acosta Barrantes',
            'gender' => 'M',
            'age' => 29,
            'birth_date' => new DateTime('2-04-1990'),
            'current_address' => null,
            'phone_number' => '964905385',
            'current_mode' => 'Sin current_mode',
            'current_category' => 'Promocional',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('146249824-E'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Carla Alessandra',
            'last_names' => 'Arbulú Amézaga',
            'gender' => 'F',
            'age' => 26,
            'birth_date' => new DateTime('27-11-1992'),
            'current_address' => null,
            'phone_number' => '943732481',
            'current_mode' => 'Recurvo',
            'current_category' => 'Promocional',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('173235272–C'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Manuel Emilio',
            'last_names' => 'Cacho Luna',
            'gender' => 'M',
            'age' => 26,
            'birth_date' => new DateTime('21-12-1992'),
            'current_address' => null,
            'phone_number' => '962333333',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('142244631–M'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Fredi',
            'last_names' => 'Chegne Arias',
            'gender' => 'M',
            'age' => 45,
            'birth_date' => new DateTime('25-03-1974'),
            'current_address' => null,
            'phone_number' => '970071693',
            'current_mode' => 'Recurvo',
            'current_category' => 'Promocional',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('1267004492–F'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jorge Luis',
            'last_names' => 'Cuenca Cabrera',
            'gender' => 'M',
            'age' => 28,
            'birth_date' => new DateTime('30-12-1980'),
            'current_address' => null,
            'phone_number' => '985519356',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('140791635–J'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Luis Reynaldo',
            'last_names' => 'Tantaleán Odar',
            'gender' => 'M',
            'age' => 45,
            'birth_date' => new DateTime('2-08-1973'),
            'current_address' => null,
            'phone_number' => '976560428',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('126696753–L'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'María de Fátima',
            'last_names' => 'Tantaleán Vargas',
            'gender' => 'F',
            'age' => 19,
            'birth_date' => new DateTime('13-01-2000'),
            'current_address' => null,
            'phone_number' => '943629784',
            'current_mode' => 'Compuesto',
            'current_category' => 'Promocional',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => null,
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172696866-M'),
            'club_id' => 4
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Adolfo Randolph',
            'last_names' => 'Guillén Cabanillas',
            'gender' => 'M',
            'age' => 59,
            'birth_date' => new DateTime('11-02-1960'),
            'current_address' => 'Jr.Austria #1347 Urbanizacion Chacra Rios Norte Lima Cercado',
            'phone_number' => '988380335',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Odontologo',
            'training_days' => null,
            'training_hour_start' => new DateTime('21:00:00'),
            'training_hour_end' => new DateTime('23:00:00'),
            'years_of_experience' => '26 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143295161-A'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Antonio Miguel',
            'last_names' => 'Chia Tang',
            'gender' => 'M',
            'age' => 38,
            'birth_date' => new DateTime('17-08-1979'),
            'current_address' => 'Av. Del Ejercito 244 dpto 1602, Magdalena del Mar, Lima',
            'phone_number' => '929290392',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Administrador de sistemas informáticos / BCP / Sub-gerente adjunto de Operaciones Business Intelligence',
            'training_days' => null,
            'training_hour_start' => new DateTime('22:00:00'),
            'training_hour_end' => new DateTime('01:00:00'),
            'years_of_experience' => '1 y 4 m',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('140433386-A'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Beatriz',
            'last_names' => 'Aliaga Hurtado',
            'gender' => 'F',
            'age' => 35,
            'birth_date' => new DateTime('16-11-1982'),
            'current_address' => 'Calle San Lorenzo 130 - Pueblo Libre - Lima',
            'phone_number' => '988802300',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'Enfermera/INSN-SB',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('141719802-B'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Beatriz',
            'last_names' => 'Aliaga Hurtado',
            'gender' => 'F',
            'age' => 35,
            'birth_date' => new DateTime('16-11-1982'),
            'current_address' => 'Calle San Lorenzo 130 - Pueblo Libre - Lima',
            'phone_number' => '988802300',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'Enfermera/INSN-SB',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => null,
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('141719802-B'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Beatriz Emilia',
            'last_names' => 'Oviedo Terzi',
            'gender' => 'F',
            'age' => 51,
            'birth_date' => new DateTime('17-03-1967'),
            'current_address' => 'Av. La Paz 1395, Dpto. 302, Miraflores',
            'phone_number' => '979710651',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Divorciada',
            'employment' => 'Técnico parlamentaria (Congreso de la República)',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '2 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('110225329-B'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Bruno Eduardo',
            'last_names' => 'Diaz Llanes',
            'gender' => 'M',
            'age' => 28,
            'birth_date' => new DateTime('20-05-1990'),
            'current_address' => 'Calle San Ignacio 198 dpto 401',
            'phone_number' => '975020300',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Médico/ Hospital Loayza/ Médico  Residente',
            'training_days' => null,
            'training_hour_start' => new DateTime('10:30:00'),
            'training_hour_end' => new DateTime('13:30:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('146329210-B'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Bryan Alexander',
            'last_names' => 'Malpartida Alvites',
            'gender' => 'M',
            'age' => 26,
            'birth_date' => new DateTime('8-04-1991'),
            'current_address' => 'Av. Lima 109-401',
            'phone_number' => '989093493',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Empresario/Grupo la Familia SAC/Gerente General',
            'training_days' => null,
            'training_hour_start' => new DateTime('10:30:00'),
            'training_hour_end' => new DateTime('13:30:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('146953940-B'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Bryan Alexander',
            'last_names' => 'Malpartida Alvites',
            'gender' => 'M',
            'age' => 26,
            'birth_date' => new DateTime('8-04-1991'),
            'current_address' => 'Av. Lima 109-401',
            'phone_number' => '989093493',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Empresario/Grupo la Familia SAC/Gerente General',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '2 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('146953940-B'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'César Miguel',
            'last_names' => 'Carranza Campos',
            'gender' => 'M',
            'age' => 25,
            'birth_date' => new DateTime('1-03-1993'),
            'current_address' => 'Condominio La Loma lote 9, Alto Larán',
            'phone_number' => '986017793',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'N.D',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '1 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('170475051-C'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Dario Ignacio',
            'last_names' => 'Chavez Marcell',
            'gender' => 'M',
            'age' => 31,
            'birth_date' => new DateTime('12-10-1986'),
            'current_address' => 'CALLE FERNANDO DOLCCI MZ. Q LOTE 8 - ROSARIO DE VILLA -CHORRILLOS',
            'phone_number' => '986313411',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Administrador',
            'training_days' => 'Martes, Jueves, Domingo',
            'training_hour_start' => new DateTime('09:00:00'),
            'training_hour_end' => new DateTime('17:00:00'),
            'years_of_experience' => '2 a 6 m',
            'amount_training_hours' => '7',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143834369-D'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Diego Sebastian',
            'last_names' => 'Garcia Carlos',
            'gender' => 'M',
            'age' => 20,
            'birth_date' => new DateTime('3-11-1997'),
            'current_address' => 'Calle Alfa Cisne 130 Dto 702',
            'phone_number' => '936787445',
            'current_mode' => 'Compuesto',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante Universitario',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '12 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('174813269-D'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Edgardo Toshiro',
            'last_names' => 'Tabuchi Yagui',
            'gender' => 'M',
            'age' => 31,
            'birth_date' => new DateTime('20-01-1987'),
            'current_address' => 'Jr. Rodolfo Rutte 445, Magdalena',
            'phone_number' => '990635794',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Maker / Lima Makers',
            'training_days' => null,
            'training_hour_start' => new DateTime('07:00:00'),
            'training_hour_end' => new DateTime('13:00:00'),
            'years_of_experience' => '5 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('144066743-E'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Fernando Antonio',
            'last_names' => 'Molina Shullca',
            'gender' => 'M',
            'age' => 26,
            'birth_date' => new DateTime('9-01-1992'),
            'current_address' => 'Av. José Carlos Mariategui 2234 - El Agustino',
            'phone_number' => '993715712',
            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Especialista en Gestión Ambiental',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '3 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('172299494-F'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Fiorella Caterina',
            'last_names' => 'Inglesi Black de Amprimo',
            'gender' => 'F',
            'age' => 48,
            'birth_date' => new DateTime('18-02-1970'),
            'current_address' => 'Calle Ignacio Merino 788 Sta. Cruz - Miraflores - Lima',
            'phone_number' => '987178226',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casada',
            'employment' => 'Arquitecta / US Link Perú SAC / Gerente Comercial',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '3 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('107870625-F'),
            'club_id' => 5
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'Genesis Carolina',
            'last_names' => 'Del Carmen Bolivar Jimenez',
            'gender' => 'F',
            'age' => 23,
            'birth_date' => new DateTime('7-07-1994'),
            'current_address' => 'Los Ebanos 437, Urb. San Hilarion, San juan de Lurigancho',
            'phone_number' => '926892109',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => null,
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '15 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('114611395-G'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Gersson Daniel',
            'last_names' => 'Hilario Garcia',
            'gender' => 'M',
            'age' => 39,
            'birth_date' => new DateTime('7-01-1979'),
            'current_address' => 'Calle San Lorenzo 130 - Pueblo Libre - Lima',
            'phone_number' => '989860148',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Arquitecto/DECO 360 SAC',
            'training_days' => null,
            'training_hour_start' => new DateTime('10:00:00'),
            'training_hour_end' => new DateTime('14:00:00'),
            'years_of_experience' => '2 a',
            'amount_training_hours' => '4',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('140105932-G'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Giancarlo Orazio',
            'last_names' => 'Amprimo Torreblanca',
            'gender' => 'M',
            'age' => 48,
            'birth_date' => new DateTime('28-10-1969'),
            'current_address' => 'Calle Ignacio Merino 788 Sta. Cruz - Miraflores - Lima ',
            'phone_number' => '987177953',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Adm. De Empresas / US Link Perú SAC / Gerente General',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '2 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('109385021-G'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Grace Elena',
            'last_names' => 'Marcell Borda',
            'gender' => 'F',
            'age' => 53,
            'birth_date' => new DateTime('28-09-1964'),
            'current_address' => 'JR. TRUJILLO SUR 117 - INT "D" LURIGANCHO-CHOSICA',
            'phone_number' => '961751142',
            'current_mode' => 'Compuesto',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Divorciada',
            'employment' => 'ABOGADA - CONCILIADORA EXTRAJUDICIAL Y FAMIILIA',
            'training_days' => 'Domingo',
            'training_hour_start' => new DateTime('09:00:00'),
            'training_hour_end' => new DateTime('13:00:00'),
            'years_of_experience' => '1 a',
            'amount_training_hours' => '4',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('106985593-G'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Gustavo Alonso',
            'last_names' => 'Manrique Guzmán',
            'gender' => 'M',
            'age' => 34,
            'birth_date' => new DateTime('29-05-1983'),
            'current_address' => 'Calle Daniel Portocarrero 235 Chorrillos',
            'phone_number' => '943257648',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Negociante',
            'training_days' => null,
            'training_hour_start' => new DateTime('13:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '30 m',
            'amount_training_hours' => '4',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('141921517-G'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Hector Ricardo',
            'last_names' => 'Jsuregui Vasquez',
            'gender' => 'M',
            'age' => 58,
            'birth_date' => new DateTime('26-03-1959'),
            'current_address' => 'Jr. Independencia 395 -  Breña - Lima',
            'phone_number' => '992708132',
            'current_mode' => 'Compuesto',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Independiente',
            'training_days' => null,
            'training_hour_start' => new DateTime('09:00:00'),
            'training_hour_end' => new DateTime('12:00:00'),
            'years_of_experience' => '40 a',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('106790303-H'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jackeline',
            'last_names' => 'Palomino Gutiérrez',
            'gender' => 'F',
            'age' => 33,
            'birth_date' => new DateTime('5-03-1985'),
            'current_address' => 'Jr. Domingo Millán º 893 Dpto. 303 Jesús María',
            'phone_number' => '961591652',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'Marina de Guerra del Perú',
            'training_days' => null,
            'training_hour_start' => new DateTime('12:00:00'),
            'training_hour_end' => new DateTime('15:00:00'),
            'years_of_experience' => '11 a',
            'amount_training_hours' => '4',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143391914-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Joaquin Ignacio',
            'last_names' => 'Paredes Ayasca',
            'gender' => 'M',
            'age' => 10,
            'birth_date' => new DateTime('10-05-2008'),
            'current_address' => 'Jr La  Mar 145 Dto 101  San  Miguel',
            'phone_number' => '2635168',
            'current_mode' => 'Compuesto',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 a',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('171362333-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Johnny Zenon',
            'last_names' => 'Paredes Sumari',
            'gender' => 'M',
            'age' => 52,
            'birth_date' => new DateTime('25-08-1965'),
            'current_address' => 'Jr La  Mar 145 Dto 101  San  Miguel',
            'phone_number' => '994075749',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'medico  traumatologo  Centro  Medico Naval',
            'training_days' => null,
            'training_hour_start' => new DateTime('15:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '1 a',
            'amount_training_hours' => '3',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('121437326-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jorge Horacio',
            'last_names' => 'Viviani Camerano',
            'gender' => 'M',
            'age' => 54,
            'birth_date' => new DateTime('1-05-1963'),
            'current_address' => 'Av. La Paz 1395, Dpto. 302, Miraflores',

            'current_mode' => 'Recurvo',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Redactor del Diario de Debates (Congreso de la República)',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '2 a',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('141462414-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Jorge Luis',
            'last_names' => 'López Balandra',
            'gender' => 'M',
            'age' => 32,
            'birth_date' => new DateTime('23-01-1986'),
            'current_address' => 'Av. Máximo Alvarado 522 Chorrillos',
            'phone_number' => '987404115',
            'current_mode' => 'Compuesto',
            'current_category' => '30 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Ejecutivo senior de Marca / Telefónica del Perú SAA',
            'training_days' => null,
            'training_hour_start' => null,
            'training_hour_end' => null,
            'years_of_experience' => '6 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143401369-J'),
            'club_id' => 5
        ]);

        DB::table('archer_profiles')->insert([
            'first_names' => 'Juan Jesús',
            'last_names' => 'Goicochea Briones',
            'gender' => 'M',
            'age' => 32,
            'birth_date' => new DateTime('25-07-1985'),
            'current_address' => 'Asoc. De Prop. 7 de Agosto Mz C Lt 3 - Callao',
            'phone_number' => '997636782',
            'current_mode' => 'Recurvo',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Entrenador de Karate Shotokan - Estudiante de Marketing',
            'training_days' => null,
            'training_hour_start' =>  new DateTime('10:00:00'),
            'training_hour_end' =>  new DateTime('11:30:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => '1:30',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('143134212-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Juan Pablo',
            'last_names' => 'Ramos Sanchez Concha',
            'gender' => 'M',
            'age' => 39,
            'birth_date' => new DateTime('24-10-1978'),
            'current_address' => 'CALLE GIRASOLES 140 DPTO301, VALLE HERMOSO, SURCO',
            'phone_number' => '987548550',
            'current_mode' => 'Recurvo',
            'current_category' => '70 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'ARQUITECTO/ ID1277 ARQUITECTOS/ DIRECTOR DE PROYECTOS',
            'training_days' => null,
            'training_hour_start' =>  new DateTime('06:30:00'),
            'training_hour_end' =>  new DateTime('17:00:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => '5',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('140031494-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Juan Rodolfo',
            'last_names' => 'Vera Chavez',
            'gender' => 'M',
            'age' => 60,
            'birth_date' => new DateTime('23-02-1958'),
            'current_address' => 'Jiron Ramirez Peña 370 Dto 401, Urb San german',
            'phone_number' => '999213313',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Casado',
            'employment' => 'Tecnico de Abastecimiento',
            'training_days' => null,
            'training_hour_start' =>  null,
            'training_hour_end' => null,
            'years_of_experience' => '22 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('108828788-J'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Luca Francesco',
            'last_names' => ' Amprimo Inglesi',
            'gender' => 'M',
            'age' => 15,
            'birth_date' => new DateTime('28-10-2002'),
            'current_address' => 'Calle Ignacio Merino 788 Sta. Cruz - Miraflores - Lima',
            'phone_number' => '977173495',
            'current_mode' => 'Compuesto',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'Estudiante / Colegio St. Georges / 9º Grado',
            'training_days' => null,
            'training_hour_start' =>  null,
            'training_hour_end' => null,
            'years_of_experience' => '4 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('177804373-L'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Mario  Misael',
            'last_names' => 'Leon Salome',
            'gender' => 'M',
            'age' => 13,
            'birth_date' => new DateTime('29-06-2004'),
            'current_address' => 'CALLE SATURNO 160 RESIDENCIAL AEROPUERTO CALLAO',
            'phone_number' => '913284406',
            'current_mode' => 'Compuesto',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltero',
            'employment' => 'ESTUDIANTE LICEO NAVAL C.C. MANUEL CLAVERO MUGA',
            'training_days' => null,
            'training_hour_start' =>  null,
            'training_hour_end' => null,
            'years_of_experience' => '1 y',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('170918818-M'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Martha Fernanda',
            'last_names' => 'Pérez Quintana',
            'gender' => 'F',
            'age' => 23,
            'birth_date' => new DateTime('26-08-1994'),
            'current_address' => 'Jr. Simón Bolivar 345 dpto 301 San Miguel, Lima',
            'phone_number' => '943124842',
            'current_mode' => 'Compuesto',
            'current_category' => '50 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'Diseñadora Industrial / Promperú / Consultora en laboratorio de innovación y creatividad - Promperú Lab',
            'training_days' => null,
            'training_hour_start' =>  new DateTime('10:00:00'),
            'training_hour_end' => new DateTime('18:00:00'),
            'years_of_experience' => '2 y',
            'amount_training_hours' => '5:30',
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('170364451-M'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert([
            'first_names' => 'Milagros Alhelí',
            'last_names' => 'Trujillo Joyja',
            'gender' => 'M',
            'age' => 16,
            'birth_date' => new DateTime('12-10-2001'),
            'current_address' => 'San Miguel-Pando9etapa-Cll.Los Cedros.Mz.A.Lt.36',
            'phone_number' => '950998014',
            'current_mode' => 'Compuesto',
            'current_category' => '20 m',
            'joined_date' => null,
            'number_of_faults' => null,
            'civil_status' => 'Soltera',
            'employment' => 'Estudiante',
            'training_days' => null,
            'training_hour_start' =>  null,
            'training_hour_end' => null,
            'years_of_experience' => '3 m',
            'amount_training_hours' => null,
            'status' => 1,
            'selection_progress' => 1,
            'user_id' => $this->getUserId('176608993-M'),
            'club_id' => 5
        ]);
        DB::table('archer_profiles')->insert(['first_names' => 'Orlando Hajime','last_names' => 'Kajiya Moran','gender' => 'M','age' => 15,'birth_date' => new DateTime('6-12-2002'),'current_address' => 'Av. Colombia 803, Pueblo Libre','phone_number' => '999885892','current_mode' => 'Compuesto','current_category' => '20 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante / Colegio La Unión','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => '','status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('175653612-O'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Oscar Augusto','last_names' => 'Garcia Escalante','gender' => 'M','age' => 59,'birth_date' => new DateTime('13-08-1958'),'current_address' => 'Calle Chachani 243, Maranga, San Miguel','phone_number' => '996455859','current_mode' => 'Compuesto','current_category' => '50 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Medico Traumatologo, Centro Medico Naval',
            'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '27 y',
            'amount_training_hours' => '3',
            'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('108859991-O'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Oskar Yeshua','last_names' => 'Garcia Riveros','gender' => 'M','age' => 27,'birth_date' => new DateTime('12-06-1990'),'current_address' => 'Calle Alfa Cisno 130 Dto 702','phone_number' => '927988671','current_mode' => 'Compuesto','current_category' => '50m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '20 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('146487084-O'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Paolo Luciano','last_names' => 'Pazzaglia Matto','gender' => 'M','age' => 23,'birth_date' => new DateTime('19-11-1994'),'current_address' => 'Marginal de la selva 384 Surco, Lima - Perú','phone_number' => '991766000','current_mode' => 'Compuesto','current_category' => '50m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Ingeniero mecatrónico, Wolfram, Research Programmer','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172630110-P'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Rafael Eduardo','last_names' => 'Caballero Nolte','gender' => 'M','age' => 26,'birth_date' => new DateTime('4-09-1991'),'current_address' => 'Jr. Ontario 442, La Molina','phone_number' => '993055730','current_mode' => 'Recutvo','current_category' => '20m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Fisico','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('147150163-R'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Rodrigo Jose','last_names' => ' Jauregui Abad','gender' => 'M','age' => 18,'birth_date' => new DateTime('8-10-1999'),'current_address' => 'Jr INDEPENDENCIA 395  BREÑA - LIMA','phone_number' => '940077954','current_mode' => 'Recurvo','current_category' => '30 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'ESTUDIANTE UNIVERSITARIO','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172789471-R'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Romina Grace Zeng','last_names' => ' Tang Candiotti','gender' => 'F','age' => 28,'birth_date' => new DateTime('22-05-1989'),'current_address' => 'victor criado tejada 2679 urb . Elio','phone_number' => '969286579','current_mode' => 'Compuesto','current_category' => '50 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'medico cirujano','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170508299-R'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Ronaldo Emerson','last_names' => 'Chumbe Real','gender' => 'M','age' => 19,'birth_date' => new DateTime('12-10-1998'),'current_address' => 'Calle Santa Rosa A.H. Pando IX ET.MZ X LT.19 ','phone_number' => '934887925','current_mode' => 'Compuesto','current_category' => '20 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173206292-R'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Ruddy Santiago','last_names' => ' Lavado Degracia','gender' => 'M','age' => 26,'birth_date' => new DateTime('21-09-1991'),'current_address' => 'Calle Gorriones Mz. L1 Lote 12 Coop. Huancayo Etapa II El Agustino','phone_number' => '1 352 8659','current_mode' => 'Compuesto','current_category' => '30 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Ingeniero de Software/EQUIFAX/Analista de Sistemas','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('147160504-R'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Santiago Solis','last_names' => 'Rimarachín','gender' => 'M','age' => 12,'birth_date' => new DateTime('1-04-2005'),'current_address' => 'Jr. Yungay 910. Dpto 402-A. Condominio Balcones de Magdalena. Magdalena del Mar','phone_number' => null,'current_mode' => 'Recurvo','current_category' => '10 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante /CEP Peruano Chino Juan XXIII','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '6 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170673412-S'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Vania','last_names' => 'Rimarachín Ching','gender' => 'F','age' => 38,'birth_date' => new DateTime('20-02-1980'),'current_address' => 'Jr. Yungay 910. Dpto 402-A. Condominio Balcones de Magdalena. Magdalena del Mar','phone_number' => '986600683','current_mode' => 'Recurvo','current_category' => '20 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casada','employment' => 'Biologa / OEFA-MINAM/Tercero Evaluador','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '6 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('140455022-V'),'club_id' =>5]);
        DB::table('archer_profiles')->insert(['first_names' => 'Abilio Daniel','last_names' => 'da Costa Bullón ','gender' => 'M','age' => 27,'birth_date' => new DateTime('11-03-1991'),'current_address' => 'Jr. Buen retiro 232, Casa 20, Monterrico,  Surco','phone_number' => '973104353','current_mode' => 'Recurvo','current_category' => '30 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Médico, Clínica Centenario Peruano Japonesa, Médico de Hospitalización ','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '6 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('146860222-A'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Adriano','last_names' => 'Espinoza Uribe','gender' => 'M','age' => 10,'birth_date' => new DateTime('1-05-2008'),'current_address' => 'Los Mochicas 104 Dpto. 302 La Molina','phone_number' => '993570726','current_mode' => 'Recurvo','current_category' => '10 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171361677-A'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Bárbara','last_names' => 'Flores Berrocal','gender' => 'F','age' => 17,'birth_date' => new DateTime('16-09-2000'),'current_address' => 'Ca. Santa Cruz de Tenerife 232 Dpto 201 Urb. La Capilla La Molina','phone_number' => '971131624','current_mode' => 'Recurvo','current_category' => '20 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante / Pontifica Universidad Catolica del Perú','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y 2 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170298352-B'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Christian Ramiro','last_names' => 'Castillo Contreras','gender' => 'M','age' => 25,'birth_date' => new DateTime('26-10-1992'),'current_address' => 'Luis Montero Mz. E-15 Urb. Sto. Dominguito - Trujillo','phone_number' => '970922959','current_mode' => 'Recurvo','current_category' => '20 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Arqueólogo','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170190183-C'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Diane Isabel','last_names' => 'Ruiz Quispe','gender' => 'F','age' => 25,'birth_date' => new DateTime('9-02-1992'),'current_address' => 'CALLE JORGE BASADRE 158 - SANTA ANITA','phone_number' => '989380597','current_mode' => 'Recurvo','current_category' => '30 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'ADMINISTRADORA ','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('147607868-D'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Diaz Pelaez','last_names' => 'Ruiz Quispe','gender' => 'M','age' => 27,'birth_date' => new DateTime('18-12-1990'),'current_address' => 'Calle Maria. P de Bellido 123 Santa Patricia La Molina','phone_number' => '993600199','current_mode' => 'Recurvo','current_category' => '70 m','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Negocio Propio ','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171854464-D'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Elsa María','last_names' => 'Arriarán Silva','gender' => 'F','age' => 19,'birth_date' => new DateTime('9-01-1999'),'current_address' => ' Calle Alfa Gemelos 142, Surquillo','phone_number' => '965333460','current_category' => '50 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173351381-E'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Francisco Javier','last_names' => 'Melian Santana','gender' => 'M','age' => 41,'birth_date' => new DateTime('4-11-1976'),'current_address' => 'Calle oviedo 115, 2° Planta, La Molina','phone_number' => '981571206','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casada','employment' => 'Dirección, mantenimiento y logística, Empresa Julio Cesar Crespo','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '7 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('1001223631-F'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Joshua André','last_names' => 'Jiménez Saldaña','gender' => 'M','age' => 24,'birth_date' => new DateTime('4-05-1993'),'current_address' => 'Urb. Sagrada Familia Mz-C, Lt. 3, Calle Las Rosas, Bellavista, Callao','phone_number' => '943183394','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante / UNALM','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172307344-J'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Leonardo Nicolas','last_names' => 'Cashpa Alcantara','gender' => 'M','age' => 14,'birth_date' => new DateTime('17-11-2003'),'current_address' => 'Av.Separadora Industrial 3034 Urb.Covima La Molina','phone_number' => '999905279','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170163916-L'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Luis Arturo','last_names' => 'Segura Yupari','gender' => 'M','age' => 59,'birth_date' => new DateTime('1-06-1959'),'current_address' => 'Mza D Lote 18 Urb San Framcisco de Asis -ATE','phone_number' => '3482026','current_category' => '50 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Militar en retiro','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('109799431-L'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'María Victoria','last_names' => ' Borja Lzoano','gender' => 'F','age' => 23,'birth_date' => new DateTime('26-09-1994'),'current_address' => 'Calle José María Arguedas 199 Urb. Lucyana Carabayllo','phone_number' => '956067399','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante / Universidad Nacional Agraria La Molina','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172474662-M'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Mariana','last_names' => 'Illescas Buendía','gender' => 'F','age' => 22,'birth_date' => new DateTime('2-02-1996'),'current_address' => 'Av. Pablo Carriquiry 881 - San Isidro','phone_number' => '959084685','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173687343-M'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Rodrigo Alonso','last_names' => 'Tello Manrique','gender' => 'M','age' => 14,'birth_date' => new DateTime('6-11-2003'),'current_address' => 'los bambues 186 dpt 302','phone_number' => '989066204','current_category' => '30 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('176921322-R'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Sebastian','last_names' => 'Reaño Martinelli','gender' => 'M','age' => 20,'birth_date' => new DateTime('21-01-1998'),'current_address' => 'calle Venecia 198 Dpto. 101','phone_number' => '945328756','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'entrenador arqueros molineros','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171950885-S'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Erick','last_names' => 'Uyehara Goya','gender' => 'M','age' => 45,'birth_date' => new DateTime('2-07-1972'),'current_address' => 'Schumann 170 dpto 202','phone_number' => '938705636','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Administrador/inversiones Kyodo sac','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('107626738-E'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Stephanie','last_names' => 'Cesti Díaz','gender' => 'F','age' => 30,'birth_date' => new DateTime('4-08-1987'),'current_address' => 'Jr. Salaverry 545 -B Surquillo','phone_number' => '959381450','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Ingeniera Industrial / Abengoa Perú / Costos y Planeamiento','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('144445654-S'),'club_id' =>6]);
        DB::table('archer_profiles')->insert(['first_names' => 'Adith','last_names' => 'Aliaga Aliaga','gender' => 'M','age' => 28,'birth_date' => new DateTime('7-05-1991'),'current_address' => 'Calle Hefestos Mz V Lt 9, Urb. Olimpo. Ate','phone_number' => '999005636','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('147070336-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alberto Eberth','last_names' => 'Castillo Vargas','gender' => 'M','age' => 47,'birth_date' => new DateTime('3-04-1972'),'current_address' => 'Calle Capirona 133, Pueblo Libre','phone_number' => '933772111','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Divorciado','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('109671185-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Aleska','last_names' => 'Burga García','gender' => 'F','age' => 19,'birth_date' => new DateTime('31-07-2000'),'current_address' => 'Calle Sevilla 474, Pueblo Libre','phone_number' => '977478020','current_category' => '70 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170657374-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alexis Carlos Angel','last_names' => ' Benavente Vallejo','gender' => 'M','age' => 37,'birth_date' => new DateTime('29-03-1982'),'current_address' => 'Calle Almenara 115 dpto. 1203','phone_number' => '937599464','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => '','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('141183921-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alexis Carlos Angel','last_names' => ' Benavente Vallejo','gender' => 'M','age' => 37,'birth_date' => new DateTime('29-03-1982'),'current_address' => 'Calle Almenara 115 dpto. 1203','phone_number' => '937599464','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('141183921-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Almudena Camila','last_names' => ' Andaluz Briceño','gender' => 'F','age' => 16,'birth_date' => new DateTime('30-01-2003'),'current_address' => 'Jr. Manuel Moncloa 2704 dpto. 203, Lima','phone_number' => '936755249','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173222268-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alyssa Mia','last_names' => 'Chaparro Stucchi','gender' => 'F','age' => 14,'birth_date' => new DateTime('24-04-2005'),'current_address' => 'Calle Carlos Concha 246, San Isidro','phone_number' => '990369030','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173184236-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Armando','last_names' => 'Cabezas Navarro','gender' => 'M','age' => 34,'birth_date' => new DateTime('1-12-1984'),'current_address' => 'Av. República de Chile 664 dpto. G, Jesús María','phone_number' => '940207736','current_category' => '0 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('142719060-A'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Brunella Mía','last_names' => 'Ubillús Guzmán','gender' => 'F','age' => 14,'birth_date' => new DateTime('2-05-2004'),'current_address' => 'Av. Manuel Villavicencio 1137 dpto. 1103, Lince','phone_number' => '959994008','current_category' => '10 m','current_mode' => 'PVC','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174501482-B'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Diego Sebastián','last_names' => 'Fernández Stucchi','gender' => 'M','age' => 16,'birth_date' => new DateTime('2-11-2003'),'current_address' => 'Parque Ayacucho 140, Pueblo Libre','phone_number' => '985063664','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170844885-D'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Emily Fiorella','last_names' => ' Kina Endo','gender' => 'F','age' => 22,'birth_date' => new DateTime('23-11-1997'),'current_address' => 'Calle Las Flores 374, San Isidro','phone_number' => '992077995','current_category' => '10 m','current_mode' => 'PCV','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174703153-E'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernando Eduardo','last_names' => 'Julio Burga Valdez','gender' => 'M','age' => 61,'birth_date' => new DateTime('27-05-1958'),'current_address' => 'Calle Sevilla 474, Pueblo Libre','phone_number' => '997576197','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('107852336-F'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernando José','last_names' => 'Coello Vega','gender' => 'M','age' => 29,'birth_date' => new DateTime('3-01-1990'),'current_address' => 'Av. Perez Araníbar 1949, San Isidro','phone_number' => '984303367','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('146187898-F'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernando José Luis','last_names' => 'Sanchez','gender' => 'M','age' => 29,'birth_date' => new DateTime('3-01-1990'),'current_address' => 'Jr. Recuay 421, Breña','phone_number' => '948714593','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('1000765751-F'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Gabriela Ydielim','last_names' => 'Subero Barrios','gender' => 'F','age' => 16,'birth_date' => new DateTime('8-02-2004'),'current_address' => 'Calle Yen Escobedo 644, San Luis','phone_number' => '951319540','current_category' => '10 m','current_mode' => 'PCV','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('192040878-G'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Gonzalo Alfredo','last_names' => 'De Armas Barrenechea','gender' => 'M','age' => 38,'birth_date' => new DateTime('14-10-1981'),'current_address' => 'Av. Dos de Mayo 445, San Isidro','phone_number' => '4220413','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('141091758-G'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Ignacia Paz','last_names' => 'Toro Leddihn','gender' => 'F','age' => 18,'birth_date' => new DateTime('25-07-2002'),'current_address' => 'Av. Jorge Basadre 1066, San Isidro','phone_number' => '933501549','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('1001336333-I'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Jorge Juan Ramon','last_names' => 'Fernandez Magot','gender' => 'M','age' => 54,'birth_date' => new DateTime('1-07-1966'),'current_address' => '135 Naomi Ave. Pismo Beach, California, USA','phone_number' => '18058018365','current_category' => '70 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('108221833-J'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Jurgen Manfred','last_names' => 'Lemke Bonicelli','gender' => 'M','age' => 53,'birth_date' => new DateTime('19-02-1967'),'current_address' => 'Parque Robert Kennedy 121, Urb. Santa Catalina, La Victoria','phone_number' => '999324482','current_category' => '10 m','current_mode' => 'PVC','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('109272733-J'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Luciana Eliana','last_names' => 'Figueroa','gender' => 'F','age' => 15,'birth_date' => new DateTime('1-07-2005'),'current_address' => 'Jr. Recuay 421, Breña','phone_number' => '948714593','current_category' => '10 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('146048733-L'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'María Fernanda','last_names' => 'Escurra Arnao','gender' => 'F','age' => 19,'birth_date' => new DateTime('18-12-2000'),'current_address' => 'José Mariano Arce 386, Pueblo Libre','phone_number' => '990023235','current_category' => '5 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'null','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => 'null','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173672076-M'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Maria Ignacia','last_names' => ' Jímenez Torres','gender' => 'F','age' => 23,'birth_date' => new DateTime('6-02-1997'),'current_address' => 'Malecón Grau 231 Dept. 1502, Magdalena del Mar.','phone_number' => '989562978','current_category' => '60 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'null','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => 'null','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('119564062-9-M'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'María José','last_names' => 'Vera Suárez','gender' => 'F','age' => 18,'birth_date' => new DateTime('28-08-2001'),'current_address' => 'Av. Jaiver Prado Oeste 1915','phone_number' => '973612172','current_category' => '10 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('11687834-M'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Marianna','last_names' => ' Stoll Gianino','gender' => 'F','age' => 12,'birth_date' => new DateTime('7-05-2008'),'current_address' => 'Manuel Gonzales La Rosa 145, San Isidro','phone_number' => '981524196','current_category' => '10 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171362649-M'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Nicolás Alejandro','last_names' => 'Vásquez Gandolfo','gender' => 'M','age' => 16,'birth_date' => new DateTime('10-02-2003'),'current_address' => 'Calle Godofredo García 181 San Isidro','phone_number' => '971717735','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('176123328-N'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Nicolás Enrique','last_names' => 'Málaga Quiñones','gender' => 'M','age' => 15,'birth_date' => new DateTime('17-10-2004'),'current_address' => 'Av. Petit Thouars 927 dpto. 313, Urb. Santa Beatriz, Lima 15046','phone_number' => '972715282','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174803079-N'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Nicolás Ramiro','last_names' => ' Carrasco Helfer','gender' => 'M','age' => 15,'birth_date' => new DateTime('6-01-2004'),'current_address' => 'Gervasio Santillana 195, San Isidro','phone_number' => '999404199','current_category' => '30 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174876806-N'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Oscar','last_names' => 'Aspíllaga Vergara','gender' => 'M','age' => 28,'birth_date' => new DateTime('7-09-1990'),'current_address' => 'Jirón Río Tambo 287, Pueblo libre','phone_number' => '999177140','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('146503794-O'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Renato Carlos','last_names' => 'Arciniega Zevallos','gender' => 'M','age' => 16,'birth_date' => new DateTime('21-03-2003'),'current_address' => 'Pasaje 11 150, Urb. San Fernando, Mirones Bajo','phone_number' => '990920642','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('176939676-R'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Renatto Alessandro','last_names' => 'Bravo Tejada','gender' => 'M','age' => 23,'birth_date' => new DateTime('16-03-1994'),'current_address' => 'Vesalio 126, San Borja','phone_number' => '922832642','current_category' => '50 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172204148-R'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Ruth María ','last_names' => 'Helfer Ferradas','gender' => 'F','age' => 48,'birth_date' => new DateTime('14-10-1971'),'current_address' => 'Av. Petit Thouars 927 dpto. 313, Urb. Santa Beatriz, Lima 15046','phone_number' => '989583857','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casada','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('109340104-R'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Sebastián Jesús','last_names' => 'Falcón Lopez','gender' => 'M','age' => 15,'birth_date' => new DateTime('14-08-2004'),'current_address' => 'Parque José de la Puente y Olavegoya 115, Pueblo Libre','phone_number' => '933939978','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172630172-S'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Tulio Javier','last_names' => 'Carrasco del Solar','gender' => 'M','age' => 52,'birth_date' => new DateTime('14-06-1967'),'current_address' => 'Av. Petit Thouars 927 dpto. 313, Urb. Santa Beatriz, Lima 15046','phone_number' => '989583858','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('106285540-T'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Valeria','last_names' => ' Muro Ortega','gender' => 'F','age' => 14,'birth_date' => new DateTime('9-08-2005'),'current_address' => 'Av. Arnaldo Márquez 642, dpto. 801, Jesús María','phone_number' => '956304704','current_category' => '10 m','current_mode' => 'PVC','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172556112-V'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Werner','last_names' => ' Guevara Ortiz','gender' => 'M','age' => 28,'birth_date' => new DateTime('1-09-1990'),'current_address' => 'La Cima 300, Surco','phone_number' => '993501651','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('146496450-W'),'club_id' =>2]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alejandro Salazar','last_names' => 'Diez Canseco','gender' => 'M','age' => 40,'birth_date' => new DateTime('16-06-1977'),'current_address' => 'Monte Verde 199 La Molina','phone_number' => '949428332','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Notaría Corvetto','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('110610516-A'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alexander Luis','last_names' => 'Moali Aroca','gender' => 'M','age' => 21,'birth_date' => new DateTime('17-06-1996'),'current_address' => 'Jr. Esteban Cámere 419 San Roque Surco','phone_number' => '962881820','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Ingeniero Civil/Instituto Peruano del Deporte/Coordinador del sistema de levantamiento de información de infraestructura deportiva','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171335803-A'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Amira Maria Grazia','last_names' => 'Galarza Gonzales','gender' => 'F','age' => 12,'birth_date' => new DateTime('10-10-2005'),'current_address' => 'Calle H #180 Block B Dpto 303 Surquillo','phone_number' => '993465389','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172103469-A'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Andrea','last_names' => 'Chirinos Arauco','gender' => 'F','age' => 42,'birth_date' => new DateTime('30-07-1975'),'current_address' => null,'phone_number' => '981089525','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Asociación Para Olímpica - JUT','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('110171401-A'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Andres Rodrigo','last_names' => 'Meneses Damian','gender' => 'F','age' => 27,'birth_date' => new DateTime('15-11-1990'),'current_address' => 'Ramon Ribeyro 110','phone_number' => '949255975','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '6 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170405624-A'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Benjamín Alfredo','last_names' => 'La Rosa La Rosa','gender' => 'M','age' => 63,'birth_date' => new DateTime('31-05-1954'),'current_address' => 'Av. Ayacucho 932 Dpto 101 - Santiago de Surco - Lima','phone_number' => '987863749','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Ingeniero Mecánico / Petróleos del Perú - PETROPERU S.A.','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('103896065-B'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Edwin Rolando','last_names' => 'La Rosa La Rosa','gender' => 'M','age' => 36,'birth_date' => new DateTime('13-11-1981'),'current_address' => 'Av. Los insurgentes 756, san miguel','phone_number' => '989037344','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Médico/Hospital Guillermo Almenara','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '7 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('141218456-E'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernando Felipe','last_names' => 'Pérez Riojas','gender' => 'M','age' => 53,'birth_date' => new DateTime('2-05-1964'),'current_address' => 'Av. Joaquin Madrid A-4 - San Borja','phone_number' => '962385080','current_category' => '20 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Diseñador Industrial - Docente. Pontificia Universidad Católica del Perú','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('107954548-F'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernando Pablo','last_names' => 'Tello Puerta','gender' => 'M','age' => 38,'birth_date' => new DateTime('1-06-1980'),'current_address' => 'Avenida Arequipa 4026 Miraflores','phone_number' => '985313290','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Abogado / Administrador','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('140690385-F'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Hugo','last_names' => 'Cussato Cárdenas','gender' => 'M','age' => 47,'birth_date' => new DateTime('25-10-1970'),'current_address' => 'Calle Pedro Venturo 114 Dpto. 102 Miraflores','phone_number' => '3636517','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Administrador/Apoyo y Asociados/Director','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '25 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('107260672-H'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Jouvet Virgilio','last_names' => 'Baldassari Fernald','gender' => 'M','age' => 66,'birth_date' => new DateTime('15-07-1951'),'current_address' => 'Dean Valdivia 775 - Lima 15083','phone_number' => '945864545','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Independiente','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '26 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('16282263-J'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'María  Socorro','last_names' => 'López García','gender' => 'F','age' => 47,'birth_date' => new DateTime('12-01-1971'),'current_address' => 'Av. Ayacucho 932 Dpto 101 - Santiago de Surco - Lima','phone_number' => '942087923','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Artista Plástica','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('100323079-M'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Percy Alexander','last_names' => 'Sampén Cáceres','gender' => 'M','age' => 36,'birth_date' => new DateTime('27-04-1981'),'current_address' => 'Av. Malachowsky 101 dpto 501. San Borja','phone_number' => '997899259','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Gerente General / Tekton Energía','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '6 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('140911993-P'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'Sebastián Alfredo','last_names' => 'Sampén Cáceres','gender' => 'M','age' => 15,'birth_date' => new DateTime('18-10-2002'),'current_address' => 'Av. Ayacucho 932 Dpto 101 - Santiago de Surco - Lima','phone_number' => '939621657','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante/Innova Schools','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170443206-S'),'club_id' =>7]);
        DB::table('archer_profiles')->insert(['first_names' => 'William Albert','last_names' => 'O Brien Tejada','gender' => 'M','age' => 20,'birth_date' => new DateTime('26-09-1997'),'current_address' => 'Urb. Los Ruiseñores A-3, Cayma, Arequipa.','phone_number' => '986125294','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Entrenador Club Internacional - Estudiante de Psicología','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '9 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172533543-W'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alvaro José Miguel Darío','last_names' => 'Bustamante Núñez','gender' => 'M','age' => 57,'birth_date' => new DateTime('8-05-1961'),'current_address' => 'Urb. Campiña Paisajista G-26','phone_number' => '959742161','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'La Pizzeria Ristorante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '7 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('130849818-A'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Ariane Carolina','last_names' => 'Balbuena Alarcón','gender' => 'F','age' => 14,'birth_date' => new DateTime('7-02-2004'),'current_address' => 'Los Arces 257 A, Cayma','phone_number' => '934429830','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174166641-A'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Barbara Allison','last_names' => 'Velasquez Gonzales','gender' => 'F','age' => 15,'birth_date' => new DateTime('27-03-2003'),'current_address' => 'Urb Residencial Frank Mitchell D-39 Dpto 1','phone_number' => '984009850','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172126178-B'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Bruno','last_names' => 'López Villa ','gender' => 'M','age' => 14,'birth_date' => new DateTime('19-11-2003'),'current_address' => 'Urb. El Cortijo D-15 C. Colorado Arequipa ','phone_number' => '992744473','current_category' => '50 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170795492-B'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Camila Celeste','last_names' => 'Portilla Salas','gender' => 'M','age' => 14,'birth_date' => new DateTime('3-12-2003'),'current_address' => 'Urb. El Rosario - Quinta Faroles Cayma #5','phone_number' => '970897892','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174606606-C'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Carlos','last_names' => 'Kriete Alburqueque','gender' => 'M','age' => 18,'birth_date' => new DateTime('8-12-1999'),'current_address' => 'Urb. Los Ángeles de Cayma C-1 Dpto. 301','phone_number' => '992882181','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173044837-C'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Carlos Patricio','last_names' => 'Rodríguez Paredes','gender' => 'M','age' => 18,'birth_date' => new DateTime('22-09-1999'),'current_address' => 'URB.monterrey A-29 segundo piso ','phone_number' => '982533120','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Ingeniero Biotecnologo Independiente','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170320686-C'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Cecilia Estefania','last_names' => 'Aramayo Chavez ','gender' => 'F','age' => 19,'birth_date' => new DateTime('11-07-1998'),'current_address' => 'Urb. Paisajista chilina A12 yanahura','phone_number' => '992713214','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('173078253-C'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Cecilia Isabel','last_names' => 'Hancco Corimayhua','gender' => 'F','age' => 17,'birth_date' => new DateTime('1-08-2000'),'current_address' => 'UPIS José Olaya N-9 zona A, Cayma','phone_number' => '988777611','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172638992-C'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Christian German','last_names' => 'Garcia Rojas','gender' => 'M','age' => 32,'birth_date' => new DateTime('13-09-1985'),'current_address' => 'Urb. San sebastian B-4, Av. Los Incas, Arequipa, Arequipa','phone_number' => '988777611','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('143171427-C'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Daniela','last_names' => 'Yaulli Herrera','gender' => 'F','age' => 14,'birth_date' => new DateTime('21-08-2003'),'current_address' => 'Pasaje Olaya 211, Alto Selva Alegre','phone_number' => '989994778','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171236951-D'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Diana Carolina','last_names' => 'Calle Guzmán','gender' => 'F','age' => 30,'birth_date' => new DateTime('13-12-1987'),'current_address' => 'Pasaje Santa Rosa 218 A Cercado Tercer Piso','phone_number' => '956309463','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Publicista , mercadologa/ SWEET ART S.A.C./Gerente General/ ','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => null,'amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('145121071-D'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernanda','last_names' => ' Herrera Lobaton ','gender' => 'F','age' => 20,'birth_date' => new DateTime('16-08-1998'),'current_address' => 'Av.bolognesi 903 Cayma','phone_number' => '969799219','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170838455-F'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Gianella Denisse','last_names' => 'Hermoza Portugal','gender' => 'F','age' => 15,'birth_date' => new DateTime('25-07-2002'),'current_address' => 'Urb.Casa lago san Jose quinta II B5','phone_number' => '958102880','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Lic. estética canina. Entrenadora de atletismo','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '3 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171257796-G'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Gonzanlo Fernando','last_names' => 'Hermoza Vinces','gender' => 'M','age' => 30,'birth_date' => new DateTime('8-09-1987'),'current_address' => 'Pasaje la Ronda 103 Cayma','phone_number' => '974324535','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('144688988-G'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Hugo Andres','last_names' => 'Vizcarra Paredes','gender' => 'M','age' => 17,'birth_date' => new DateTime('15-11-2000'),'current_address' => null,'phone_number' => '940419703','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172942146-H'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Irene Alcira ','last_names' => 'Prieto Guzmán ','gender' => 'F','age' => 45,'birth_date' => new DateTime('25-09-1972'),'current_address' => 'urb.Piedra Santa  M-28','phone_number' => '980488101','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Arquitecta/E.P.E.I','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('129600977-I'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Jeanette','last_names' => 'Hokz de Zuñiga','gender' => 'M','age' => 66,'birth_date' => new DateTime('26-03-1951'),'current_address' => 'Calle Colon 199, Paucarpata, Arequipa','phone_number' => '990759056','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '10 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('142650050-J'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Joaquín Pérez','last_names' => 'Alcázar Martínez ','gender' => 'M','age' => 18,'birth_date' => new DateTime('20-01-2000'),'current_address' => 'Río Santa 168 ','phone_number' => '989259663','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Pintor Artistico Profesional','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2.5 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170441712-J'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Jorge Andre','last_names' => 'Begazo Villanueva','gender' => 'M','age' => 15,'birth_date' => new DateTime('18-10-2002'),'current_address' => 'Arequipa, Sachaca, Pampa de camarones, Av 28 de Julio 315','phone_number' => '958002003','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estilista Canino/ Gerente','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172000890-J'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Jose Manuel ','last_names' => 'Balbuena Alarcón','gender' => 'M','age' => 15,'birth_date' => new DateTime('11-05-2002'),'current_address' => 'Los Arces 257 A, Cayma','phone_number' => '977303792','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estilista Canino/ Gerente','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174166648-J'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Luis','last_names' => 'Fernandez Abuid','gender' => 'M','age' => 72,'birth_date' => new DateTime('9-03-1945'),'current_address' => 'Calle Pizarro 105 - CERCADO','phone_number' => '922294988','current_category' => '50 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Divorciado','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '22 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('129267714-L'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'María Elena','last_names' => ' Alarcón Salas','gender' => 'F','age' => 43,'birth_date' => new DateTime('11-06-1974'),'current_address' => 'Los Arces 257 A, Cayma','phone_number' => '974301815','current_category' => '30 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casada','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('129601836-M'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Pamela Ruth','last_names' => ' Velasquez Cuadros','gender' => 'F','age' => 30,'birth_date' => new DateTime('19-03-1987'),'current_address' => 'Urb. Leon XIII L-18, Cayma','phone_number' => '959135040','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casada','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('144945863-P'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Paola Rosario','last_names' => 'Hancco Corimayhua','gender' => 'F','age' => 13,'birth_date' => new DateTime('15-04-2004'),'current_address' => 'UPIS José Olaya N-9 zona A, Cayma','phone_number' => '979804302','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172638999-P'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Pilar Beatriz','last_names' => 'Landeo Díaz','gender' => 'F','age' => 42,'birth_date' => new DateTime('25-09-1975'),'current_address' => 'Coop. Universitaria i-1 Dpto. 3 Arequipa','phone_number' => '959377524','current_category' => '20 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Divorciada','employment' => 'Secretaria','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('129639038-P'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Santiago','last_names' => 'Prado Odar','gender' => 'M','age' => 17,'birth_date' => new DateTime('20-07-2000'),'current_address' => 'Malaga Grenet 208, Umacollo','phone_number' => '964106233','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => '','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170348383-S'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Valeria Estefania','last_names' => 'Canevaro Guevara','gender' => 'F','age' => 14,'birth_date' => new DateTime('14-06-2003'),'current_address' => 'URB. EL SOLAR DE CHALLAPAMPA C-15, CERRO COLORADO','phone_number' => '958343330','current_category' => '30 m','current_mode' => 'Compuesto','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171058073-V'),'club_id' =>8]);
        DB::table('archer_profiles')->insert(['first_names' => 'Adrian','last_names' => 'Wong Garcia','gender' => 'M','age' => 18,'birth_date' => new DateTime('9-10-1999'),'current_address' => 'Jr. JOAQUÍN BERNAL #1042 SAN JUAN DE MIRAFLORES','phone_number' => '977309207','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'ESTUDIANTE DE AGRONOMÍA','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170800637-A'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Cesar Ernesto','last_names' => 'Flores Bedoya','gender' => 'M','age' => 20,'birth_date' => new DateTime('17-03-1998'),'current_address' => 'Los Olivos','phone_number' => '995452961','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'Estudiante','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '8 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('181595583-C'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Darren Nekker','last_names' => 'Muchari Campoos','gender' => 'M','age' => 19,'birth_date' => new DateTime('22-09-1998'),'current_address' => null,'phone_number' => '933301636','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'ESTUDIANTE DE AGRONOMÍA','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y 8 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174941691-D'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Estefani','last_names' => 'Cuéllar Tenorio','gender' => 'F','age' => 20,'birth_date' => new DateTime('20-03-1999'),'current_address' => 'Mz. 5 Lt. 31 SAN JUAN DE MIRAFLORES','phone_number' => '980250821','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'ESTUDIANTE DE INGENIERÍA AMBIENTAL','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('174131189-E'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Fernando','last_names' => 'Chancos Vasquez','gender' => 'M','age' => 25,'birth_date' => new DateTime('19-04-1994'),'current_address' => 'Calle José Ingenieros 245','phone_number' => '9807476276','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => null,'training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '6 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171627584-F'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Gianlucca','last_names' => 'Arbocco Böttger','gender' => 'M','age' => 19,'birth_date' => new DateTime('10-07-1998'),'current_address' => 'Calle Los Chirimoyos Mz. G. Lt. 9, Urbanizacion residencial Monterrico - La Molina','phone_number' => '922060436','current_category' => '70 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'ESTUDIANTE DE ECONOMÍA/FOREPLAY/ASISTENTE DE FINANZAS','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '2 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('175932037-G'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Ítalo','last_names' => ' Yupán Artica','gender' => 'M','age' => 24,'birth_date' => new DateTime('31-10-1993'),'current_address' => 'Jr. Arica 541, Villa El Salvador','phone_number' => null,'current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'ESTUDIANTE DE METEOROLOGÍA','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y 6 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('148006257-I'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Juan Carlos','last_names' => ' Fernández Estrada','gender' => 'M','age' => 39,'birth_date' => new DateTime('11-06-1978'),'current_address' => 'AV. SAN JUAN MZ J LT 9, ALAMEDA DE ATE, ATE','phone_number' => '975517791','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Casado','employment' => 'ADMINISTRADOR/UNIVERSIDAD NACIONAL AGRARIA LA MOLINA/EVALUADOR DE INCORPORACIÓN DE RR. HH.','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y 5 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('124718927-J'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Rosmeri','last_names' => 'Pardo Pulido','gender' => 'F','age' => 22,'birth_date' => new DateTime('20-05-1995'),'current_address' => 'LADERAS DE CHILLÓN, PRIMERA EXPLANADA MZ. L LT. 35','phone_number' => '955283209','current_category' => '20 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'ESTUDIANTE DE INDUSTRIAS ALIMENTARIAS','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y 1 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('171778626-R'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Silvia','last_names' => 'Santos Peña','gender' => 'F','age' => 24,'birth_date' => new DateTime('14-06-1993'),'current_address' => 'CALLE MOLINERO MZ. D, LT. 16, LA MOLINA','phone_number' => '969712122','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltera','employment' => 'ESTUDIANTE DE INGENIERÍA FORESTAL','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y 7 m','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('172655654-S'),'club_id' =>9]);
        DB::table('archer_profiles')->insert(['first_names' => 'Alex Mariano','last_names' => 'Tipula Valencia','gender' => 'M','age' => 19,'birth_date' => new DateTime('26-04-1998'),'current_address' => 'R. LAS CALCEDONIAS 2057, SAN JUAN DE LURIGANCHO, LIMA','phone_number' => '999293171','current_category' => '30 m','current_mode' => 'Recurvo','joined_date' => null,'number_of_faults' => null,'civil_status' => 'Soltero','employment' => 'ESTUDIANTE DE ECONOMÍA','training_days' => null,'training_hour_start' => null,'training_hour_end' => null,'years_of_experience' => '1 y','amount_training_hours' => null,'status' => 1,'selection_progress' => 1,'user_id' => $this->getUserId('170830219-A'),'club_id' =>9]);





























    }
    private function getUserId($feptarcoId) {
        $user = \App\Model\User::where('feptarco_id', $feptarcoId)->get()->first();
        return $user->id;
    }
    private function getRoleId($role) {
        $role = \App\Model\Role::where('name', $role)->get()->first();
        return $role->id;
    }

}
