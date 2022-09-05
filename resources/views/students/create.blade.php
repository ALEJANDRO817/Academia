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
                                    <label for="Document_type">Tipo de documento *</label>
                                    <select class="form-select form-control" id="Document_type" name="Document_type" aria-label="Floating label select example">
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
                                <input id="identify_document" class="" type="file"  name="identity_document" accept="application/pdf">
                                </div>
                            <br>
                            <div class="form-group">
                                <div >
                                    <label for="document_issunig_country" >País de expedición *</label>
                                    <select class="form-select form-control" id="document_issunig_country" name="document_issunig_country" aria-label="Floating label select example">

                                       <option selected>Seleccione</option>
                                      @foreach ( $countries as $land)
                                                <option value="">{{$land->name}}</option>
                                            @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="issuing_department"><b>Departamento donde fue expedido*</b></label>
                                <div >
                                    <select class="form-select form-control" id="issuing_department"  name="issuing_department" aria-label="Floating label select example">
                                      <option selected>Seleccione</option>
                                      @foreach ( $departaments as $top)
                                                <option value="">{{$top->name}}</option>
                                            @endforeach
                                    </select>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="issuing_municipality">Municipio donde fue expedido*</label>
                                <div >
                                    <select class="form-select form-control" id="issuing_municipality" name="issuing_municipality" aria-label="Floating label select example">
                                      <option selected>Seleccione</option>
                                      @foreach ( $municipalities as $exp)
                                                <option value="">{{$exp->name}}</option>
                                            @endforeach
                                    </select>
                                  </div>
                            </div>

                            <div class="form-group">
                                <label for="id_expedition_date"><b>Fecha de expedición *</b></label>
                                <input id="id_expedition_date" class="form-control" type="date" name="id_expedition_date">
                            </div>


                </div>
                <div class="col">
                    <div class="col-12">


                        <div class="form-group">
                            <label ><b>Datos de identificación</b></label>
                            <div class="form-group ">
                                <label for="names">Nombres *</label>
                                <input id="names"  type="text" name="names" class="form-control">
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
                                <select class="form-select form-control" id="gender" name="gender" aria-label="Floating label select example">
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
                            <label for="birth_country">País de nacimiento *</label>
                            <div >
                                <select class="form-select form-control" id="birth_country" name="birth_country" aria-label="Floating label select example">
                                  <option selected>Seleccione</option>
                                  @foreach ( $countries as $land)
                                  <option value="">{{$land->name}}</option>
                              @endforeach
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="birth_departament"><b>Departamento de nacimiento *</b></label>
                            <div >
                                <select class="form-select form-control" id="birth_departament" name="birth_departament" aria-label="Floating label select example">
                                  <option selected>Seleccione</option>
                                  @foreach ( $departaments as $top)
                                  <option value="">{{$top->name}}</option>
                              @endforeach
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="id_birth_municipality">Municipio de nacimiento *</label>
                            <div >
                                <select class="form-select form-control" id="id_birth_municipality" name="id_birth_municipality" aria-label="Floating label select example">
                                  <option selected>Seleccione</option>
                                  @foreach ( $municipalities as $exp)
                                                <option value="">{{$exp->name}}</option>
                                            @endforeach
                                </select>
                              </div>
                        </div>

                        <div class="form-group">
                            <label for="stratum"><b>Estrato socioeconómico*</b></label>
                            <div >
                                <select class="form-select form-control" id="stratum"  name="stratum" aria-label="Floating label select example">
                                  <option selected>Seleccione</option>
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>

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
