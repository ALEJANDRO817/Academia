@extends('layouts.appThree')

@section('title', 'Mostrar Estudiantes')

@section('content')

    <h1 class="text-center mt-4 ">Informacion de estudiante</h1>

    <div class="container2 form bg-light text-dark rounded">
        <br>
        <div class="row">
            <div class="col-sm-5 mx-5 pb-3 ">
                <h5>Documento de identidad</h5>
                <br>
                <div class="form-group row">
                    @foreach ( $procces as $consult )
                        <div class="form-group ">
                        <p><b>Tipo de documento: </b>{{$trainee->document_type}}</p>
                        <p><b>No. de documento </b>{{$trainee->document_number}}</p>
                        <p><b>Documento pdf:</b>
                            <br>
                            <iframe src="{{ Storage::url($trainee->identify_document) }}" width="250" height="200"></iframe></p>
                        <p><b>País de expedición: </b>{{$consult->nameCountry}}</p>
                        <p><b>Depto. de expedición: </b>{{$consult->nameDepart}}</p>
                        <p><b>Municipio de expedición: </b>{{$consult->muni}}</p>
                        <p><b>Fecha de expedición: </b>{{$trainee->expedition_date}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-sm ms-5 me-5 pb-3 rounded">
            </div>
            <div class="col-sm-4 mx-5 px-1 pb-3 rounded">
                <h5>Datos de identificación</h5>
                <br>
                <div class="form-group row">
                    @foreach ( $procces_2 as $consult2 )
                        <div class="form-group ">
                            <p><b>Nombres: </b>{{$trainee->name}}</p>
                            <p><b>Primer Apellido: </b>{{$trainee->first_last_name}}</p>
                            <p><b>Segundo Apellido: </b>{{$trainee->second_last_name}}</p>
                            <p><b>Género: </b>{{$trainee->gender}}</p>
                            <p><b>Fecha de Nacimiento: </b>{{$trainee->birth_date}}</p>
                            <p><b>País de Nacimiento: </b>{{$consult2->country}}</p>
                            <p><b>Depto. de Nacimiento: </b>{{$consult2->departament}}</p>
                            <p><b>Municipio de Nacimiento: </b>{{$consult2->birthMuni}}</p>
                            <p><b>Estrato Socioeconómico: </b>{{$trainee->stratum}}</p>
                            @foreach ( $procces_3 as $consult3 )
                                <p><b>Curso matriculado: </b>{{$consult3->name}}</p>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <br>
                <div class="button mb-1">
                    <a href="/students/" class="btn btn-secondary">Regresar</a>
                    <a href="/students/{{$trainee->id}}/edit" class="btn btn-success">Editar</a>
                    <label><form action="/students/{{$trainee->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                       <button type="submit" class="btn btn-danger">Eliminar</button>
                  </form></label>

                </div>
            </div>
        </div>
    </div>

@endsection
