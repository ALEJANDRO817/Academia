@extends('layouts.app')

@section('title', 'Crear curso')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/courses" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @csrf
                        <h2 class="text-center mt-5">Crear Nuevo Curso</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre del curso:</b></label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="description"><b>Descripción:</b></label>
                            <input id="description" class="form-control" type="text" name="description">
                        </div>
                        <div class="form-group">
                            <label for="duration"><b>Duración (horas):</b></label>
                            <input id="duration" class="form-control" type="text" name="duration">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue la imagen del curso:</b></label>
                            <input id="imagen" class="" type="file" name="imagen">
                        </div>
                        <br>
                        <div class="button text-center">
                            <button class="btn btn-success" type="submit">Crear</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm">

            </div>
        </div>
    </div>

@endsection


{{--
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear cursos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h2 class="text-center mt-5">Aquí puedes crear un nuevo curso</h2>
        <br>
        <div class="form-group">
            <label for="name">Nombre del curso</label>
            <input id="name" class="form-control" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="description">Descripción px-</label>
            <input id="description" class="form-control" type="text" name="description">
        </div>
        <div class="form-group">
            <label for="duration">Duración</label>
            <input id="duration" class="form-control" type="text" name="duration">
        </div>
        <button class="btn btn-success" type="submit">Crear</button>
    </div>
</body>
</html>
--}}
