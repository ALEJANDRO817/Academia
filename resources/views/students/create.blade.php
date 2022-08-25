@extends('layouts.appThree')

@section('title', 'Crear Nuevo Estudiante')

@section('content')

                <div >
                    <form action="/students" method="POST" class="mx-3 px-3 my-5 pt-2 pb-5" enctype="multipart/form-data">
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



                    <div class="container">
                        <div class="row">
                         <div class="col-6">

                            <div class="form-group">
                                <label for="description"><b>Documento de Identidad*</b></label>
                                <div  >
                                    <label >Tipo de documento *</label>
                                    <select class="form-select form-control" id="floatingSelect" aria-label="Floating label select example">
                                      <option value="1">Cédula de Ciudadanía</option>
                                      <option value="2">Tarjeta de Identidad</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group ">
                                <label for="name"><b>Número de documento *</b></label>
                                <input id="name"  type="text" name="name" class="form-control">

                            </div>
                            <div>
                                <label for="floatingSelect">Cargue Documen. Identificacion *</label>
                                <button type="button" class="btn btn-primary form-control" disabled>Primary button</button>
                            </div>
                            <br>
                            <div class="form-group">
                                <div >
                                    <label >País de expedicón *</label>
                                    <select class="form-select form-control" id="floatingSelect" aria-label="Floating label select example">
                                      <option value="1">Colombia</option>
                                      <option value="2">Otros</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Departamento donde fue expedido*</b></label>
                                <div >
                                    <select class="form-select form-control" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected>Seleccione</option>
                                      <option value="1">Cédula de Ciudadanía</option>
                                      <option value="2">Tarjeta de Identidad</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="description"><b>Municipio donde fue expedido*</b></label>
                                <div >
                                    <select class="form-select form-control" id="floatingSelect" aria-label="Floating label select example">
                                      <option selected>Seleccione</option>
                                      <option value="1">Cédula de Ciudadanía</option>
                                      <option value="2">Tarjeta de Identidad</option>
                                    </select>
                                  </div>
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






                         </div>
                         <div class="col-6">Contenedor de 7 columnna</div>
                       </div>
                     </div>
      </div>
    </div>

@endsection

