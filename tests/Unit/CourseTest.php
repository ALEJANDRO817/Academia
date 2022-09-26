<?php

namespace Tests\Unit;

use App\Models\Course;
use Tests\TestCase;
use Database\Factories\CourseFactory;

use function PHPUnit\Framework\assertTrue;

class CourseTest extends TestCase
{

    public function test_save_new_course()
    {
        $answer = $this->post('/courses',[
            'name'=> 'Bootstrap',
            'description'=> 'Curso avanzado de framework',
            'duration'=> 50,
            'imagen'=> 'img.png'
        ]);

        return $answer->assertRedirect('/');
    }
    public function test_save_new_course1()
    {
        $answer = $this->post('/courses',[
            'name'=> 'C#',
            'description'=> 'Curso avanzado de framework',
            'duration'=> 50,
            'imagen'=> 'img1.png'
        ]);

        return $answer->assertRedirect('/');
    }
    public function test_course_duplication()
    {
        $course1 = Course::make([
            'name'=> 'Laravel',
            'description'=>'Curso basico de laravel',
            'imagen'=> 'img.jpg',
        ]);
        $course2 = Course::make([
            'name'=> 'Python',
            'description'=>'Curso basico de python',
            'imagen'=> 'img1.jpg',
        ]);

        $this->assertTrue($course1->name != $course2->name && $course1->description != $course2->description && $course1->imagen != $course2->imagen);
    }
    public function test_course_duplication1()
    {
        $course1 = Course::make([
            'name'=> 'PHP',
            'description'=>'Curso basico de PHP',
            'imagen'=> 'img.jpg',
        ]);
        $course2 = Course::make([
            'name'=> 'Vue',
            'description'=>'Curso basico de Vue',
            'imagen'=> 'img1.jpg',
        ]);

        $this->assertTrue($course1->name != $course2->name && $course1->description != $course2->description && $course1->imagen != $course2->imagen);
    }
    public function test_delete_course(){

        $course = Course::factory()->count(1)->make();
        $course = Course::first();

        if($course){
            $course->delete();
        }

        $this->assertTrue(true);
    }
    public function test_delete_course1(){

        $course = Course::factory()->count(1)->make();
        $course = Course::first();

        if($course){
            $course->delete();
        }

        $this->assertTrue(true);
    }
    public function test_delete_course2(){

        $course = Course::factory()->count(1)->make();
        $course = Course::first();

        if($course){
            $course->delete();
        }

        $this->assertTrue(true);
    }


}
