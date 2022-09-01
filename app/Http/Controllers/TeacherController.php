<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeTeacherRequest;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutor = Teacher::all();//Traemos toda la info de la tabla tutor a traves del modelo y el método all()
        return view('teachers.index', compact('tutor'));//Se adjunta tutor a la vista para poderlo usar, usando compact
        // return $tutor;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeTeacherRequest $request)
    {
        //  se implementa Validacion
            // $dataValidate = $request->validate([
            //     'nombre' => 'required|max:10',
            //     'avatar' => 'required|image'
            // ]);
        //Se devuelve la petición hecha al servidor
        // return $request->all();
        $tutor = new Teacher();//Crear una instancia de la clase Curso
        $tutor->name = $request->input('name');
        $tutor->Lastname = $request->input('Lastname');
        $tutor->colelle_degree = $request->input('colelle_degree');
        $tutor->age = $request->input('age');
        $tutor->contract_date = $request->input('contract_date');
        $tutor->imagen = $request->input('imagen');
        $tutor->identity_document = $request->input('identity_document');

        if($request->hasFile('imagen')){
            $tutor->imagen = $request->file('imagen')->store('public/teachers');
        }
        if($request->hasFile('identity_document')){
            $tutor->identity_document = $request->file('identity_document')->store('public/identity_document');
        }

        $tutor->save();//Comando para registrar la info en la bd
        return view('teachers.add_teacher');
        // return $grade->description;
        // return $grade;
        // return $request->input('name');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tutor = Teacher::find($id);
        return view('teachers.show', compact('tutor'));
        // return 'El id de este curso es: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tutor = Teacher::find($id);
        // return 'El id de este curso es: ' . $id;
        // return 'La iformación que usted quiere actualizar, se vería en formato array...' . $grade;
        return view('teachers.edit', compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(storeTeacherRequest $request, $id)
    {
        $tutor = Teacher::find($id);

        $tutor->fill($request->except('imagen', 'identity_document'));
        if($request->hasFile('imagen')){
            $tutor->imagen = $request->file('imagen')->store('public/teachers');
        }
        if($request->hasFile('identity_document')){
            $tutor->identity_document = $request->file('identity_document')->store('public/identity_document');
        }

        $tutor->save();
        // return $request;
        return view('teachers.edit_teacher');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tutor = Teacher::find($id);

        $urlImagenBD = $tutor->imagen;
        // return $urlImagenBD;
        // $rutaCompleta = public_path().$urlImagenBD;
        // return $rutaCompleta;
        $nombreImagen = str_replace('public/', '\storage\\', $urlImagenBD );
        $rutaCompleta = public_path().$nombreImagen;
        // return $rutaCompleta;
        unlink($rutaCompleta);
        $urlDocument = $tutor->identity_document;
         $documentName = str_replace('public/', '\storage\\', $urlDocument);
         $fullRoute = public_path() . $documentName;
         unlink($fullRoute);
         $tutor->delete();
         return view('teachers.del_teacher');
        // return 'registro
        // eliminado correctamente';

    }
}
