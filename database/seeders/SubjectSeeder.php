<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Subject::create([
            'id' => 1,
            'name' => 'Programacion',
            'timetable' => '20'
        ]);

        Subject::create([
            'id' => 2,
            'name' => 'trabajo',
            'timetable' => '30'
        ]);

        Subject::create([
            'id' => 3,
            'name' => 'Laboracion',
            'timetable' => '30'
        ]);
    }
}
