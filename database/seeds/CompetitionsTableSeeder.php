<?php

use Illuminate\Database\Seeder;

class CompetitionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('competitions_types')->insert([
            'name' => 'Outdoor clasificatoria',
            'details' => 'Competencia clasificatoria',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()

        ]);
        
        DB::table('competitions')->insert([
            'name' => 'Abierto Perú Archery 2019',
            'start_date' => new DateTime('20-03-2019'),
            'end_date' => new DateTime('23-03-2019'),
            'location' => 'Lima, Santiago de Surco',
            'coordinates' => '12° 9′ 0″ S, 77° 1′ 0″',
            'details' => 'Competencia Outdoor calificatoria',
            'status' => 0,
            'certification_doc' => 'archivo.pdf',
            'type_id' => $this->getTypeId('Outdoor clasificatoria'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()
        ]);

        DB::table('competitions')->insert([
            'name' => 'Abierto Clasificatorio Perú Archery 2019 Octubre',
            'annoucement_date' => new DateTime('01-10-2019'),
            'start_date' => new DateTime('20-10-2019'),
            'end_date' => new DateTime('22-10-2019'),
            'location' => 'Miraflores',
            'coordinates' => '12° 9′ 0″ S, 77° 1′ 0″',
            'details' => 'Competencia Outdoor',
            'status' => 1,
            'certification_doc' => 'archivo.pdf',
            'type_id' => $this->getTypeId('Outdoor clasificatoria'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime()

        ]);
    }

    private function getTypeId($name) {
        $type = \App\Model\CompetitionType::where('name', $name)->get()->first();
        return $type->id;
    }
}
