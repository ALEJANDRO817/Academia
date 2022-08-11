@extends('layouts.appTwo')

@section('title', 'Lista De Docentes')

@section('content')

    <h2 class="text-center mt-5 p-t5">Listado Docentes</h2>

    {{-- Sirve para iterar arrays, Es decir nos permite realizar ciclos --}}
    <div class="row bg-light text-dark rounded mt-5 pt-3 mb-3 pb-3">
        @foreach ( $tutor as $profesor )
        {{--  la doble llave sirve para interpolar, interpolar es traer una variable de otro lenguaje al lenguaje que se esta usando actualmente --}}

            <div class="col-sm">
                <div class="card" style="width: 20rem;">
                    <img src="{{ Storage::url($profesor->imagen) }}" width="300" height="220" alt="">
                    <div class="card-body">
                        <h5 class="card-title"> {{$profesor->name}} </h5>
                        {{-- <p class="card-text"> <b>Contenido:</b> {{$training->description}} </p> --}}
                        {{-- <p class="card-text"> <b>Duración:</b> {{$training->duration}} Horas</p> --}}
                        <div class="text-center">
                            <a href="/teachers/{{$profesor->id}}" class="btn btn-primary">Ver detalle</a>
                        </div>
                    </div>
                </div>
                <br>
            </div>

        @endforeach
    </div>

@endsection

