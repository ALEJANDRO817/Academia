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
            'name' => 'Antioquia',
            'country_id' => '1'
        ]);

        Department::create([
            'id' => 2,
            'name' => 'Cundinamarca',
            'country_id' => '1'
        ]);

        Department::create([
            'id' => 3,
            'name' => 'Risaralda',
            'country_id' => '1'
        ]);

        Department::create([
            'id' => 4,
            'name' => 'Aragua',
            'country_id' => '2'
        ]);

        Department::create([
            'id' => 5,
            'name' => 'Carabobo',
            'country_id' => '2'
        ]);
    }
}
