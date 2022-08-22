<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matter = Subject::all();
        return view('subjects.index', compact('matter'));
        // return $matter;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('subjects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $matter = new Subject();
        $matter->name = $request->input('name');
        $matter->hourly_intensity = $request->input('hourly_intensity');
        $matter->save();
        return view('subjects.add_subject');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matter = Subject::find($id);
        return view('subjects.show', compact('matter'));
        // return 'El id de la materia es: ' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matter = Subject::find($id);
        // return 'El id de la materia es: ' . $id;
        // return 'La iformación que ud quiere actualizar, se vería en formato array...' . $matter;
        return view('subjects.edit', compact('matter'));
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
        $matter = Subject::find($id);
        $matter->fill($request->all());
        $matter->save();
        return view('subjects.edit_subject');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $matter = Subject::find($id);
        $matter->delete();
        return view('subjects.del_subject');
    }
}
