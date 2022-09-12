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
            //'id' => 1,
            'name' => 'Envigado',
            'id_departament_belongs' => 1
        ]);

        Municipality::create([
            //'id' => 2,
            'name' => 'Medellín',
            'id_departament_belongs' => 1
        ]);

        Municipality::create([
           // 'id' => 3,
            'name' => 'Rionegro',
            'id_departament_belongs' => 1
        ]);

        Municipality::create([
           // 'id' => 4,
            'name' => 'Bogotá',
            'id_departament_belongs' => 2
        ]);

        Municipality::create([
           // 'id' => 5,
            'name' => 'Facatativá',
            'id_departament_belongs' => 2
        ]);

        Municipality::create([
          //  'id' => 6,
            'name' => 'Soacha',
            'id_departament_belongs' => 2
        ]);

        Municipality::create([
          //  'id' => 7,
            'name' => 'DosQuebradas',
            'id_departament_belongs' => 3
        ]);

        Municipality::create([
          //  'id' => 8,
            'name' => 'Santa Rosa',
            'id_departament_belongs' => 3
        ]);

        Municipality::create([
          //  'id' => 9,
            'name' => 'Pereira',
            'id_departament_belongs' => 3
        ]);

        // Municipality::create([
        //     'id' => 10,
        //     'name' => 'La Victoria',
        //     'department_id' => '4'
        // ]);

        // Municipality::create([
        //     'id' => 11,
        //     'name' => 'Maracay',
        //     'department_id' => '4'
        // ]);

        // Municipality::create([
        //     'id' => 12,
        //     'name' => 'San Mateo',
        //     'department_id' => '4'
        // ]);

        // Municipality::create([
        //     'id' => 13,
        //     'name' => 'Guacara',
        //     'department_id' => '5'
        // ]);

        // Municipality::create([
        //     'id' => 14,
        //     'name' => 'Puerto Cabello',
        //     'department_id' => '5'
        // ]);

        // Municipality::create([
        //     'id' => 15,
        //     'name' => 'Valencia',
        //     'department_id' => '5'
        // ]);
    }
}
