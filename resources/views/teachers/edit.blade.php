@extends('layouts.app')

@section('title', 'Editar curso')

@section('content')

    <div class="container2">
        <div class="row">
            <div class="col-sm">

            </div>
            <div class="col-lg">
                <div class="form bg-light text-dark rounded">
                    <form action="/teachers/{{$tutor->id}}" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                        <h2 class="text-center mt-5">Editar Docente</h2>
                        <br>
                        <div class="form-group">
                            <label for="name"><b>Nombre del Docente:</b></label>
                            <input id="name" class="form-control" type="text" name="name" value="{{$tutor->name}}">
                        </div>
                        <div class="form-group">
                            <label for="Lastname"><b>Apellidos:</b></label>
                            <input id="Lastname" class="form-control" type="text" name="Lastname" value="{{$tutor->Lastname}}">
                        </div>
                        <div class="form-group">
                            <label for="colelle_degree"><b>Titulo Universitario:</b></label>
                            <input id="colelle_degree" class="form-control" type="text" name="colelle_degree" value="{{$tutor->colelle_degree}}">
                        </div>
                        <div class="form-group">
                            <label for="age"><b>Edad:</b></label>
                            <input id="age" class="form-control" type="text" name="age" value="{{$tutor->age}}">
                        </div>
                        <div class="form-group">
                            <label for="contract_date"><b>Fecha contrato:</b></label>
                            <input id="contract_date" class="form-control" type="text" name="contract_date" value="{{$tutor->contract_date}}">
                        </div>
                        <div class="form-group">
                            <label for="imagen"><b>Cargue imagen del docente:</b></label>
                            <br>
                            <label for="identity_document"><img src="{{ Storage::url($tutor->imagen) }}" width="70" height="70" class="mb-5"></label>
                            <input id="imagen" class="" type="file" name="imagen"  accept="image/*" value="{{$tutor->imagen}}">
                        </div>
                        <div class="form-group">
                            <label for="identity_document"><b>Documento identidad:</b></label>
                            <label for="identity_document"><iframe width="350" height="350" src="{{Storage::url($tutor->identity_document)}}"></iframe></label>
                            <input id="identity_document" class="" type="file" name="identity_document" accept="application/pdf">
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
