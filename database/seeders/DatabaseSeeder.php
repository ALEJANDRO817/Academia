<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CountrySeeder::class,
            CourseSeeder::class,
            SubjectSeeder::class,
            DepartamentoSeeder::class,
            MunicipalitySeeder::class
        ]);
    }
}
