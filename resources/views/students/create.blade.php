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
                        <div class="row">
                         <div class="col-6">

                            <div class="form-group">
                                <label><b>Documento de Identidad*</b></label>
                                <div  >
                                    <label for="document_type">Tipo de documento *</label>
                                    <select class="form-select form-control" id="document_type" name="document_type" aria-label="Floating label select example">
                                        <option value="CC">CC</option>
                                        <option value="TI">TI</option>
                                        <option value="CE">CE</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group ">
                                <label for="document_number"><b>Número de documento *</b></label>
                                <input id="document_number"  type="text" name="document_number" class="form-control">

                            </div>
                            <div>
                                <label for="identify_document">Cargue Documen. Identificacion *</label>
                                <input id="identify_document" class="" type="file"  name="identify_document" accept="application/pdf" title="Examinar">
                                </div>
                            <br>
                            <div class="form-group">
                                <div >
                                    <label for="document_issunig_country" >País de expedición *</label>
                                    <select class="form-select form-control" id="document_issunig_country" name="document_issunig_country" aria-label="Floating label select example" required>

                                       <option value="">Seleccione</option>
                                       @foreach ( $countries as $land)
                                                <option value="">{{$land->name}}</option>
                                            @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="issuing_department"><b>Departamento donde fue expedido*</b></label>
                                <div >
                                    <select class="form-select form-control" required id="issuing_department"  name="issuing_department" aria-label="Floating label select example">
                                      <option value="">Seleccione</option>
                                      @foreach ( $departamentos as $top)
                                                <option value="">{{$top->name}}</option>
                                            @endforeach
                                    </select>
                                  </div>
                            </div>

                            <div class="form-group">
                            <label for="id_issuing_municipalityy">Municipio donde fue expedido *</label>
                            <div >
                                <select class="form-select form-control" required id="id_issuing_municipalityy" name="id_issuing_municipalityy" >
                                  <option value="">Seleccione</option>
                                  @foreach ( $municipalities as $expr)
                                                <option value="{{$expr->id}}">{{$expr->name}}</option>
                                            @endforeach
                                </select>
                              </div>
                        </div>

                            <div class="form-group">
                                <label for="expedition_date"><b>Fecha de expedición *</b></label>
                                <input id="expedition_date" class="form-control" type="date" name="expedition_date">
                            </div>


                </div>
                <div class="col">
                    <div class="col-12">


                        <div class="form-group">
                            <label ><b>Datos de identificación</b></label>
                            <div class="form-group ">
                                <label for="name">Nombres *</label>
                                <input id="name"  type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group ">
                            <label for="first_last_name">Primer apellido *</label>
                            <input id="first_last_name"  type="text" name="first_last_name" class="form-control">
                        </div>

                        <div class="form-group ">
                            <label for="second_last_name">segundo apellido</label>
                            <input id="second_last_name"  type="text" name="second_last_name" class="form-control">
                        </div>

                        <div class="form-group">
                            <div >
                                <label for="gender">Género *</label>
                                <select class="form-select form-control"  required id="gender" name="gender" aria-label="Floating label select example">
                                  <option value="">seleccione</option>
                                  <option value="M">M</option>
                                  <option value="F">F</option>
                                  <option value="OTROS">OTROS</option>
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_date"><b>Fecha de nacimiento *</b></label>
                            <input id="birth_date" class="form-control" type="date" name="birth_date">
                        </div>

                        <div class="form-group">
                            <label for="birth_municipality">País de nacimiento *</label>
                            <div >
                                <select class="form-select form-control" required id="birth_municipality" name="birth_municipality" aria-label="Floating label select example">
                                  <option value="">Seleccione</option>
                                  @foreach ( $countries as $land)
                                  <option value="">{{$land->name}}</option>
                              @endforeach
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_municipality"><b>Municipio de nacimiento *</b></label>
                            <div >
                                <select class="form-select form-control" required id="birth_municipality" name="birth_municipality">
                                  <option value="">Seleccione</option>
                                  @foreach ( $municipalities as $top)
                                  <option value="{{$top->id}}">{{$top->name}}</option>
                              @endforeach
                                </select>
                              </div>
                        </div>



                        <div class="form-group">
                            <label for="stratum"><b>Estrato socioeconómico*</b></label>
                            <div >
                                <select class="form-select form-control" required id="stratum"  name="stratum" aria-label="Floating label select example">
                                  <option value="">Seleccione</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>

                                </select>
                              </div>
                        </div>

                        <div class="form-group row">
                            <label for="id_course" class="col-sm-6 col-form-label">Curso</label>
                            <div class="col-sm-6">
                                <select class="form-control" required  name="id_course" id="id_course">
                                    <option value="">Seleccionar</option>
                                    @foreach ( $courses as $grade)
                                        <option value="{{ $grade->id }}">{{ $grade->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <br>

                        <div class="button text-center">
                            <a href="/students/" type="button" class="btn btn-secondary btn-sm">Regresar</a>
                            <button type="submit" class="btn btn-primary btn-sm">Continuar</button>
                        </div>




                    </form>
                </div>
            </div>
                 </div>
                    </div>









                         </div>
                       </div>
                     </div>
      </div>
    </div>

@endsection
