<?php

namespace Database\Seeders;

use App\Models\Departamento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            //'id' => 1,
            'name' => 'Antioquia',
            'id_country_belongs' => 1
        ]);

        Departamento::create([
            //'id' => 2,
            'name' => 'Cundinamarca',
            'id_country_belongs' => 1
        ]);

        Departamento::create([
           // 'id' => 3,
            'name' => 'Risaralda',
            'id_country_belongs' => 1
        ]);

        Departamento::create([
          //  'id' => 4,
            'name' => 'Aragua',
            'id_country_belongs' => 2
        ]);

        Departamento::create([
          //  'id' => 5,
            'name' => 'Carabobo',
            'id_country_belongs' => 2
        ]);
    }
}
