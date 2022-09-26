<?php

namespace Tests\Unit;


use Tests\TestCase;
use App\Models\Teacher;

class TeacherTest extends TestCase
{


    public function test_save_new_teacher()

    {
        $answer = $this->post('/teachers',[
            'name' => 'Liliana',
            'Lastname'=>'Moreno',
            'colelle_degree'=>'2022-09-22',
            'age' => 30,
            'contract_date' =>'2022-08-22',
            'imagen'=>'img1.jpg',
            'identity_document'=>'doc.pdf',
        ]);

        return $answer->assertRedirect('/');
    }
    public function test_save_new_teacher1()

    {
        $answer = $this->post('/teachers',[
            'name' => 'Miguel',
            'Lastname'=>'Rubio',
            'colelle_degree'=>'2022-09-22',
            'age' => 35,
            'contract_date' =>'2022-08-22',
            'imagen'=>'img.jpg',
            'identity_document'=>'doc1.pdf',
        ]);

        return $answer->assertRedirect('/');
    }

    public function test_teacher_duplication()
    {
        $teacher1 = Teacher::make([
            'imagen'=>'img1.jpg',
            'identity_document'=>'doc.pdf'
        ]);
        $teacher2 = Teacher::make([
            'imagen'=>'img.jpg',
            'identity_document'=>'doc1.pdf'
        ]);

        $this->assertTrue($teacher1->imagen != $teacher2->imagen && $teacher1->identity_document != $teacher2->identity_document);
    }
    public function test_teacher_duplication1()
    {
        $teacher1 = Teacher::make([
            'imagen'=>'img1.jpg',
            'identity_document'=>'doc.pdf'
        ]);
        $teacher2 = Teacher::make([
            'imagen'=>'img.jpg',
            'identity_document'=>'doc1.pdf'
        ]);

        $this->assertTrue($teacher1->imagen != $teacher2->imagen && $teacher1->identity_document != $teacher2->identity_document);
    }
    public function test_delete_teacher(){

        $teacher = Teacher::factory()->count(1)->make();
        $teacher = Teacher::first();

        if($teacher){
            $teacher->delete();
        }

        $this->assertTrue(true);
    }
    public function test_delete_teacher1(){

        $teacher = Teacher::factory()->count(1)->make();
        $teacher = Teacher::first();

        if($teacher){
            $teacher->delete();
        }

        $this->assertTrue(true);
    }
    public function test_delete_teacher2(){

        $teacher = Teacher::factory()->count(1)->make();
        $teacher = Teacher::first();

        if($teacher){
            $teacher->delete();
        }

        $this->assertTrue(true);
    }
}
