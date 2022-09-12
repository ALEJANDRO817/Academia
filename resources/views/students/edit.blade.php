@extends('layouts.appThree')

@section('title', 'Editar Estudiante')

@section('content')

<h2 class="text-start mx-3 mt-5 pt-3">Editar Estudiante</h2>

    <div class="container2 form bg-light text-dark rounded">
        <h3 class="text-start mx-3 mt-5 pt-3">Información básica</h3>
        <br>
        <div class="text mx-5 mb-4">
            <p>Para editar la información en Drawing Academy debe ingresar información básica de identificación.
                Tenga en cuenta que los campos marcados con * son obligatorios para continuar la actualización de datos.
            </p>
        </div>
        <hr>
        <div class="row">
                <div class="col-sm-4 mx-5 pb-3 rounded">
                        <form action="/students/{{$trainee->id}}" method="POST" class="" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf

                            <h5>Documento de identidad</h5>
                            <br>
                                <div class="form-group row">
                                    <label for="document_type" class="col-sm-6 col-form-label">Tipo de documento *</label>
                                    {{-- <label for="document_type" class="col-sm-6 col-form-label">{{$trainee->document_type}}</label> --}}
                                    <div class="col-sm-6">
                                        <select class="form-control" id="document_type" name="document_type">
                                            <option>{{$trainee->document_type}}</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_number" class="col-sm-6 col-form-label">No. de documento *</label>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="document_number" id="document_number" value="{{$trainee->document_number}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="identify_document" class="col-sm-6 col-form-label">Cargue Docum. Identificación *</label>
                                    <label for="identify_document"><iframe src="{{Storage::url($trainee->identify_document) }}" width="100" height="100"></iframe>
                                    </label>
                                    <div class="col-sm-6">
                                        <input type="file" value="{{$trainee->identify_document}}" class="hidden" id="identify_document" name="identify_document" accept="application/pdf" title="Examinar"/>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="document_issunig_country" class="col-sm-6 col-form-label">País de expedición *</label>
                                    @foreach ( $query as $consult )
                                        <label for="document_issunig_country" class="col-sm-6 col-form-label"></label>
                                    @endforeach
                                    <div class="col-sm-6">
                                        <select class="form-control" name="document_issunig_country" id="document_issunig_country">
                                        <option selected>{{$consult->nameCountry}}</option>                                      
                                              @foreach ( $countries as $land)
                                                <option value="">{{ $land->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="issuing_department" class="col-sm-6 col-form-label">Depto. donde fue expedido *</label>
                                    @foreach ( $query as $consult )
                                        <label for="document_issunig_country"  class="col-sm-6 col-form-label" ></label>
                                    @endforeach
                                    <div class="col-sm-6">
                                        <select class="form-control" id="issuing_department" name="issuing_department">
                                        <option selected>{{ $consult->nameDepart}}</option>
                                            @foreach ( $departamentos as $dept)
                                                <option value="">{{ $dept->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="id_issuing_municipalityy" class="col-sm-6 col-form-label">Municipio donde fue expedido *</label>
                                    @foreach ( $query as $consult )
                                        <label for="document_issunig_country" class="col-sm-6 col-form-label"></label>
                                    @endforeach
                                    <div class="col-sm-6">
                                        <select class="form-control" id="id_issuing_municipalityy" name="id_issuing_municipalityy">
                                            <option selected>{{ $consult->nameMuni}}</option>
                                            @foreach ( $municipalities as $city)
                                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="expedition_date" class="col-sm-6 col-form-label">Fecha de expedición *</label>
                                    <div class="col-sm-6">
                                        <input type="date" class="form-control" name="expedition_date" id="expedition_date" value="{{$trainee->expedition_date}}">
                                    </div>
                                </div>
                </div>
                <div class="col-sm rounded">
                </div>
                <div class="col-sm-4 mx-5 px-1 pb-3 rounded">
                        <h5>Datos de identificación</h5>
                        <br>
                            <div class="form-group row">
                                <label for="name" class="col-sm-6 col-form-label">Nombres *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" value="{{$trainee->name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="first_last_name" class="col-sm-6 col-form-label">Primer apellido *</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="first_last_name" name="first_last_name" value="{{$trainee->first_last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="second_last_name" class="col-sm-6 col-form-label">Segundo apellido</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="second_last_name" name="second_last_name" value="{{$trainee->second_last_name}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="gender" class="col-sm-6 col-form-label">Género *</label>
                                <div class="col-sm-6">
                                    <select class="form-control"  id="gender" name="gender">
                                        <option selected>Seleccionar</option>
                                        <option value="M">M</option>
                                        <option value="F">F</option>
                                        <option value="OTROS">OTROS</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birth_date" class="col-sm-6 col-form-label">Fecha de nacimiento *</label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="birth_date" name="birth_date" value="{{$trainee->birth_date}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="birth_municipality" class="col-sm-6 col-form-label">País de nacimiento *</label>
                                @foreach ( $query2 as $consult2 )
                                    <label for="document_issunig_country" class="col-sm-6 col-form-label"></label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="birth_municipality" id="birth_municipality">
                                        <option selected>{{$consult2->birthCountry}}</option>
                                        @foreach ( $countries as $land)
                                            <option value="">{{ $land->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- <div class="form-group row">
                                <label for="birth_municipality" class="col-sm-6 col-form-label">Departamento de nacimiento *</label>
                                @foreach ( $query2 as $consult2 )
                                    <label for="document_issunig_country" class="col-sm-6 col-form-label">{{ $consult2->birthDepart}}</label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="birth_municipality" id="birth_municipality">
                                        <option selected>{{$consult2->birthDepart}}</option>
                                        @foreach ( $departamentos as $dept)
                                            <option value="">{{ $dept->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div> -->
                            <div class="form-group row">
                                <label for="birth_municipality" class="col-sm-6 col-form-label">Municipio de nacimiento *</label>
                                @foreach ( $query2 as $consult2 )
                                <label for="birth_municipality" class="col-sm-6 col-form-label"></label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="birth_municipality" id="birth_municipality">
                                        <option selected>{{$consult2->birthMuni}}</option>
                                        @foreach ( $municipalities as $city)
                                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stratum" class="col-sm-6 col-form-label">Estrato socioeconómico *</label>
                                {{-- <label for="stratum" class="col-sm-6 col-form-label">{{$trainee->stratum}}</label> --}}
                                <div class="col-sm-6">
                                    <select class="form-control" name="stratum" id="stratum" value="">{{$trainee->stratum}}>
                                        <option selected>{{$trainee->stratum}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="id_course" class="col-sm-6 col-form-label">Curso</label>
                                @foreach ( $query3 as $consult3 )
                                    <label for="id_course" class="col-sm-6 col-form-label"></label>
                                @endforeach
                                <div class="col-sm-6">
                                    <select class="form-control" name="id_course" id="id_course">
                                        <option >seleccionar</option>
                                        @foreach ( $courses as $grade)
                                            <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="buttons">
                                <a href="/students/" class="btn btn-secondary">Regresar</a>
                                <input type="submit" class="btn btn-success" value="Actualizar">
                            </div>
                        </form>
            </div>
        </div>
    </div>
    <br>

@endsection
