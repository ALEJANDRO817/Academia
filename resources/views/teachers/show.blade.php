@extends('layouts.appTwo')

@section('title', 'Mostrar cursos')

@section('content')

    <div class="bg-light text-dark rounded mt-5 pt-5 mb-5 pb-5 text-center">
        <img src="{{ Storage::url($tutor->imagen) }}" width="350" height="310" class="mb-5">
        <p class="card-text"> <b>Contenido:</b> {{$tutor->name}} </p>
        <p class="card-text"> <b>Duración:</b> {{$tutor->Lastname}} Horas</p>
        <div class="text-center p-3">
            <a href="/courses/{{$tutor->id}}/edit" class="btn btn-warning">Editar</a>

        </div>

    <br>
    <br>

    <form class="for-group" action="/teachers/{{$tutor->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">--Eliminar--</button>
    </form>
</div>


@endsection
