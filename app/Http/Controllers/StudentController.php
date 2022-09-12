<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeStudentRequest;
use App\Models\Country;
use App\Models\Course;
use App\Models\Departamento;
use App\Models\Municipality;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        $countries = Country::all();
        $departamentos = Departamento::all();
        $municipalities = Municipality::all();
        $trainee = Student::all();
        return view('students.index', compact('trainee', 'courses', 'countries', 'departamentos', 'municipalities'));
       // return $trainee;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $countries = Country::all();
        $departamentos = Departamento::all();
        $municipalities = Municipality::all();
        $trainee = Student::all();
        return view('students.create', compact('trainee', 'courses', 'countries', 'departamentos', 'municipalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeStudentRequest $request)
    {
        $trainee = new Student();
        $trainee->document_type = $request->input('document_type');
        $trainee->document_number = $request->input('document_number');
        if($request->hasFile('identify_document')){
        $trainee->identify_document = $request->file('identify_document')->store('public/students/identify_document');}
        $trainee->expedition_date = $request->input('expedition_date');
        $trainee->id_issuing_municipalityy = $request->input('id_issuing_municipalityy');
        $trainee->name = $request->input('name');
        $trainee->first_last_name = $request->input('first_last_name');
        $trainee->second_last_name = $request->input('second_last_name');
        $trainee->gender = $request->input('gender');
        $trainee->birth_date = $request->input('birth_date');
        $trainee->birth_municipality = $request->input('birth_municipality');
        $trainee->stratum = $request->input('stratum');
        $trainee->id_course = $request->input('id_course');
        $trainee->save();
        return view('students.add_student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainee = Student::find($id);
        $procces = Municipality::join(
            'students', 'students.id_issuing_municipalityy', 'municipalities.id'
        )
        ->join(
            'departamentos', 'departamentos.id', 'municipalities.id_departament_belongs'
        )
        ->join(
            'countries', 'countries.id', 'departamentos.id_country_belongs'
        )
        ->where('students.id', $id)
        ->select('municipalities.name as muni', 'departamentos.name as nameDepart', 'countries.name as nameCountry')
        ->get();

        $procces_2 = Municipality::join(
            'students', 'students.birth_municipality', 'municipalities.id'
        )
        ->join(
            'departamentos', 'departamentos.id', 'municipalities.id_departament_belongs'
        )
        ->join(
            'countries', 'countries.id', 'departamentos.id_country_belongs'
        )
        ->where('students.id', $id)
        ->select('municipalities.name as birthMuni', 'departamentos.name as departament', 'countries.name as country')
        ->get();

        $procces_3 = Course::join(
            'students', 'students.id_course', 'courses.id'
        )
        ->where('students.id', $id)
        ->select('courses.name as name')
        ->get();


        return view('students.show', compact('trainee', 'procces', 'procces_2', 'procces_3') );
        // return 'El id del estudiante es: ' . $id;

        // return $procces;
        // $newprocces = json_decode($procces, true);
        // $response = json_decode($procces->text()) ;
        // return  $response;


    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainee = Student::find($id);
        $courses = Course::all();
        $countries = Country::all();
        $departamentos = Departamento::all();
        $municipalities = Municipality::all();
        $procces = Municipality::join(
            'students', 'students.id_issuing_municipalityy', 'municipalities.id'
        )
        ->join(
            'departamentos', 'departamentos.id', 'municipalities.id_departament_belongs'
        )
        ->join(
            'countries', 'countries.id', 'departamentos.id_country_belongs'
        )
        ->where('students.id', $id)
        ->select('municipalities.name as muni', 'departamentos.name as nameDepart', 'countries.name as nameCountry')
        ->get();

        $procces_2 = Municipality::join(
            'students', 'students.birth_municipality', 'municipalities.id'
        )
        ->join(
            'departamentos', 'departamentos.id', 'municipalities.id_departament_belongs'
        )
        ->join(
            'countries', 'countries.id', 'departamentos.id_country_belongs'
        )
        ->where('students.id', $id)
        ->select('municipalities.name as birthMuni', 'departamentos.name as departament', 'countries.name as country')
        ->get();

        $procces_3 = Course::join(
            'students', 'students.id_course', 'courses.id'
        )
        ->where('students.id', $id)
        ->select('courses.name as name')
        ->get();


        return view('students.edit', compact('trainee', 'procces', 'procces_2', 'procces_3', 'courses', 'countries', 'departamentos', 'municipalities'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trainee = Student::find($id);
        // return $trainee;
        $trainee->fill($request->except('identify_document'));
        if($request->hasFile('identify_document')){
            $trainee->identify_document = $request->file('identify_document')->store('public/students/identify_document');
        }
        $trainee->save();
        return view('students.edit_student');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainee = Student::find($id);
        $urlDocument = $trainee->identify_document;
        $documentName = str_replace('public/', '\storage\\', $urlDocument);
        $fullRoute = public_path() . $documentName;
        unlink($fullRoute);
        $trainee->delete();
        return view('students.del_student');
    }
}
