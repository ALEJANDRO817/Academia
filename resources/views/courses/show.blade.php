@extends('layouts.app')

@section('title', 'Mostrar cursos')

@section('content')

    <div class="bg-light text-dark rounded mt-5 pt-5 mb-5 pb-5 text-center">
        <img src="{{ Storage::url($grade->imagen) }}" width="350" height="310" class="mb-5">
        <p class="card-text"> <b>Contenido:</b> {{$grade->description}} </p>
        <p class="card-text"> <b>Duración:</b> {{$grade->duration}} Horas</p>
        <div class="text-center p-3">
            <a href="/courses/{{$grade->id}}/edit" class="btn btn-warning">Editar</a>
            <a href="/courses/{{$grade->id}}/" class="btn btn-danger ms-">Eliminar</a>
        </div>
    </div>

@endsection
