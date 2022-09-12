<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::create([
           // 'id' => 1,
            'name' => 'Programacion con Laravel',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit esse sint accusamus rerum veritatis repellat, eaque voluptate adipisci ab quia iusto iure. Beatae, officiis. Esse consequatur inventore quae odit similique',
            'duration' =>10,
            'imagen' => 'algo.jpg'
        ]);

    }
}
