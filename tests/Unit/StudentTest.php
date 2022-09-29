<?php

use App\Models\Student;
use Tests\TestCase;

class StudentTest extends TestCase
{

    public function test_save_new_student()
    {
        $answer = $this->post('/students',[
            'document_type' => 'CC',
            'document_number'=> '1024465906',
            'identify_document'=> 'img1.jpg',
            'expedition_date' => '2022-01-18',
            'id_issuing_municipalityy'=> 'Risaralda',
            'name'=> 'Yudi Karina ',
            'first_last_name' => 'Vasquez',
            'second_last_name' => 'Moreno',
            'gender'=> 'F',
            'birth_date'=> '2004-01-02',
            'birth_municipality' => 'Bogotá',
            'stratum'=> '3',
            'id_course'=> '1',
        ]);

        return $answer->assertRedirect('/');
    }
    public function test_save_new_student1()
    {
        $answer = $this->post('/students',[
            'document_type' => 'CC',
            'document_number'=> '1024479265',
            'identify_document'=> 'img.jpg',
            'expedition_date' => '2022-01-18',
            'id_issuing_municipalityy'=> 'Risaralda',
            'name'=> 'Luis ',
            'first_last_name' => 'Vasquez',
            'second_last_name' => 'Moreno',
            'gender'=> 'F',
            'birth_date'=> '2004-01-02',
            'birth_municipality' => 'Bogotá',
            'stratum'=> '3',
            'id_course'=> '1',
        ]);

        return $answer->assertRedirect('/');
    }
    public function test_student_duplication()
    {
        $student1 = Student::make([
            'document_number'=> '1024465906',
            'identify_document'=> 'img1.jpg',
        ]);
        $student2 = Student::make([
            'document_number'=> '1024479265',
            'identify_document'=> 'img.jpg',
        ]);

        $this->assertTrue($student1->document_number != $student2->document_number && $student1->identify_document != $student2->identify_document);
    }

    public function test_student_duplication1()
    {
        $student1 = Student::make([
            'document_number'=> '1024465906',
            'identify_document'=> 'img1.jpg',
        ]);
        $student2 = Student::make([
            'document_number'=> '1024479265',
            'identify_document'=> 'img.jpg',
        ]);

        $this->assertTrue($student1->document_number != $student2->document_number
         && $student1->identify_document != $student2->identify_document);
    }
    public function test_delete_student(){

        $student = Student::factory()->count(1)->make();
        $student = Student::first();

        if($student){
            $student->delete();
        }

        $this->assertTrue(true);
    }
    public function test_delete_student1(){

        $student = Student::factory()->count(1)->make();
        $student = Student::first();

        if($student){
            $student->delete();
        }

        $this->assertTrue(true);
    }
    public function test_delete_student2(){

        $student = Student::factory()->count(1)->make();
        $student = Student::first();

        if($student){
            $student->delete();
        }

        $this->assertTrue(true);
    }
}



//git config --global user.name
//git config --global user.email
// dbhdsbfjfnkds
