@extends('layouts.appTwo')

@section('title', 'Crear Nuevo Docente')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/teachers" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @csrf

                    @if ($errors->any())
                        @foreach ($errors->all() as $alert )
                            <div class="alert alert-danger" role="alert">
                                    <ul>
                                        <li>{{$alert}}</li>
                                    </ul>
                            </div>
                        @endforeach
                    @endif

                        <h2 class="text-center mt-5">Crear Nuevo Docente</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre del docente:</b></label>
                            <input id="name" class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group">
                            <label for="Lastname"><b>Apellidos:</b></label>
                            <input id="Lastname" class="form-control" type="text" name="Lastname">
                        </div>
                        <div class="form-group">
                            <label for="colelle_degree"><b>Titulo Uni:</b></label>
                            <input id="colelle_degree" class="form-control" type="text" name="colelle_degree">
                        </div>
                        <div class="form-group">
                            <label for="age"><b>Edad:</b></label>
                            <input id="age" class="form-control" type="text" name="age">
                        </div>
                        <div class="form-group">
                            <label for="contract_date"><b>Fecha contrato:</b></label>
                            <input id="contract_date" class="form-control" type="date" name="contract_date">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue imagen del docente:</b></label>
                            <input id="imagen" class="" type="file" name="imagen">
                        </div>
                        <div class="form-group">
                            <label for="identity_document"><b>Documento identidad:</b></label>
                            <input id="identity_document" class="" type="file" name="identity_document">
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

