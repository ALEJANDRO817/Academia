@extends('layouts.appTwo')

@section('title', 'Mostrar cursos')

@section('content')

    <div class="bg-light text-dark rounded mt-5 pt-5 mb-5 pb-5 text-center">
        <img src="{{ Storage::url($tutor->imagen) }}" width="250" height="250" class="mb-5">
        <p class="card-text"> <b>Nombre:</b> {{$tutor->name}} </p>
        <p class="card-text"> <b>Apellidos:</b> {{$tutor->Lastname}} </p>
        <p class="card-text"> <b>Titulo Universitario:</b> {{$tutor->colelle_degree}} </p>
        <p class="card-text"> <b>Edad:</b> {{$tutor->age}} </p>
        <p class="card-text"> <b>Fecha Contrato:</b> {{$tutor->contract_date}} </p>
        <iframe width="350" height="350" src="{{Storage::url($tutor->identity_document)}}"></iframe>
        <div class="text-center p-3">
            <a href="/teachers/{{$tutor->id}}/edit" class="btn btn-warning">Editar</a>

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
