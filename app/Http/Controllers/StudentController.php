<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Department;
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
    {   $countries = Country::all();
        $departaments = Department::all();
        $municipalities = Municipality::all();
        $trainee = Student::all();
        return view('students.index', compact('trainee'));
       // return $trainee;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $departaments = Department::all();
        $municipalities = Municipality::all();
        return view('students.create', compact('countries', 'departaments', 'municipalities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainee = new Student();
        $trainee->document_type = $request->input('document_type');
        $trainee->document_number = $request->input('document_number');
        if($request->hasFile('identify_document')){
            $trainee->identify_document = $request->file('identify_document')->store('public/students/identify_document');
        }
        $trainee->document_issuing_country = $request->input('document_issuing_country');
        $trainee->issuing_department = $request->input('issuing_department');
        $trainee->issuing_municipality = $request->input('issuing_municipality');
        $trainee->name = $request->input('name');
        $trainee->first_last_name = $request->input('first_last_name');
        $trainee->second_last_name = $request->input('second_last_name');
        $trainee->gender = $request->input('gender');
        $trainee->birth_date = $request->input('birth_date');
        $trainee->birth_country = $request->input('birth_country');
        $trainee->birth_department = $request->input('birth_department');
        $trainee->birth_municipality = $request->input('birth_municipality');
        $trainee->stratum = $request->input('stratum');
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
        return view('students.show' , compact('trainee'));
        //return 'El id del estudiente es: ' . $id;
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
        //return 'El id del estudiente es: ' . $id;
        //return 'La informacion que usted quiere autualizar, se veria en formato array...' . $trainee;
        return view('students.edit', compact('trainee'));
    }

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
        return view('students.add_student');
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
        $$trainee->delete();
        return view('students.del_student');
    }
}
