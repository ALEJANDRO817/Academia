@extends('layouts.appThree')

@section('title', 'Lista de estudiantes')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado de estudiantes</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">
        @foreach ( $trainee as $pet )
        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando acutalmente --}}

            <div class="col-sm">
                <div class="card" style="width: 20rem;">
                    <img src="{{ Storage::url($pet->imagen) }}" width="300" height="220" alt="">
                    <div class="card-body">
                        <h5 class="card-title"> Nombres: {{$pet->name}}</h5>
                        <h5 class="card-title"> Apellidos: {{$pet->first_last_name}} {{$pet->second_last_name}} </h5>
                        <h5 class="card-title"> Género: {{$pet->gender}}</h5>
                        <h5 class="card-title"> Tipo Documento: {{$pet->document_type}}</h5>
                        <h5 class="card-title"> N* documento: {{$pet->document_number}}</h5>
                        {{-- <p class="card-text"> <b>Contenido:</b> {{$pet->first_last_name}} </p> --}}
                        {{-- <p class="card-text"> <b>Duración:</b> {{$pet->second_last_name}} </p> --}}
                        <div class="text-center">
                            <a href="/students/{{$pet->id}}" class="btn btn-primary">Ver detalle</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>

        @endforeach
    </div>

@endsection

