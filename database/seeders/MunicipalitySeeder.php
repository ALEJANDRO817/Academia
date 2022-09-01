<?php

namespace Database\Seeders;

use App\Models\Municipality;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Municipality::create([
            'id' => 1,
            'name_municipalitie' => 'Envigado',
            'id_departament_belongs' => '1'
        ]);

        Municipality::create([
            'id' => 2,
            'name_municipalitie' => 'Medellín',
            'id_departament_belongs' => '1'
        ]);

        Municipality::create([
            'id' => 3,
            'name_municipalitie' => 'Rionegro',
            'id_departament_belongs' => '1'
        ]);

        Municipality::create([
            'id' => 4,
            'name_municipalitie' => 'Bogotá',
            'id_departament_belongs' => '2'
        ]);

        Municipality::create([
            'id' => 5,
            'name_municipalitie' => 'Facatativá',
            'id_departament_belongs' => '2'
        ]);

        Municipality::create([
            'id' => 6,
            'name_municipalitie' => 'Soacha',
            'id_departament_belongs' => '2'
        ]);

        Municipality::create([
            'id' => 7,
            'name_municipalitie' => 'DosQuebradas',
            'id_departament_belongs' => '3'
        ]);

        Municipality::create([
            'id' => 8,
            'name_municipalitie' => 'Santa Rosa',
            'id_departament_belongs' => '3'
        ]);

        Municipality::create([
            'id' => 9,
            'name_municipalitie' => 'Pereira',
            'id_departament_belongs' => '3'
        ]);

        Municipality::create([
            'id' => 10,
            'name_municipalitie' => 'La Victoria',
            'id_departament_belongs' => '4'
        ]);

        Municipality::create([
            'id' => 11,
            'name_municipalitie' => 'Maracay',
            'id_departament_belongs' => '4'
        ]);

        Municipality::create([
            'id' => 12,
            'name_municipalitie' => 'San Mateo',
            'id_departament_belongs' => '4'
        ]);

        Municipality::create([
            'id' => 13,
            'name_municipalitie' => 'Guacara',
            'id_departament_belongs' => '5'
        ]);

        Municipality::create([
            'id' => 14,
            'name_municipalitie' => 'Puerto Cabello',
            'id_departament_belongs' => '5'
        ]);

        Municipality::create([
            'id' => 15,
            'name_municipalitie' => 'Valencia',
            'id_departament_belongs' => '5'
        ]);
    }
}
