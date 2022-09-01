<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create([
            'id' => 1,
            'name_departament' => 'Antioquia',
            'id_country_belongs' => '1'
        ]);

        Department::create([
            'id' => 2,
            'name_departament' => 'Cundinamarca',
            'id_country_belongs' => '1'
        ]);

        Department::create([
            'id' => 3,
            'name_departament' => 'Risaralda',
            'id_country_belongs' => '1'
        ]);

        Department::create([
            'id' => 4,
            'name_departament' => 'Aragua',
            'id_country_belongs' => '2'
        ]);

        Department::create([
            'id' => 5,
            'name_departament' => 'Carabobo',
            'id_country_belongs' => '2'
        ]);
    }
}
