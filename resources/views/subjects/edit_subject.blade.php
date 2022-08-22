@extends('layouts.app')

@section('title', 'Editar curso')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/courses/{{$grade->id}}" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                        <h2 class="text-center mt-5">Editar Curso</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre del curso:</b></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$grade->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Descripción:</b></label>
                            <input id="description" class="form-control" type="text" name="description" value="{{$grade->description}}">
                        </div>
                        <div class="form-group">
                            <label for="duration"><b>Duración (horas):</b></label>
                            <input id="duration" class="form-control" type="text" name="duration" value="{{$grade->duration}}">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue la imagen del curso:</b></label>
                            <br>
                            <label for="description"> <img src="{{ Storage::url($grade->imagen) }}" width="50" height="50" alt=""></label>
                            <input id="imagen" class="" type="file" name="imagen">
                        </div>
                        <br>
                        <div class="button text-center">
                            <button class="btn btn-success" href="" type="submit">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

@endsection
