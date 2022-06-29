@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Ingresar Nueva Ficha</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.ficha')}}" method="POST">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-2">
                                        <label for="" class="form-label">Numero de la Ficha</label>
                                        <input type="text" class="form-control" id="" name="ficha">
                                    </div>
                                    
                                    <div class="mb-2">
                                        <label for="" class="form-label">Origen</label>
                                        <input type="text" class="form-control" id="" name="origen">
                                    </div>

                                    <div class="mb-2">
                                        <label for="" class="form-label">Tutor Encargado</label>
                                        <input type="text" class="form-control" id="" name="tutor">
                                    </div>

                                    <div class="mb-2">
                                        <label for="" class="form-label">Carrera</label>
                                        <input type="text" class="form-control" id="" name="carrera">
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-2">
                                        <label for="" class="form-label">Numero de Aprendices Femeninos</label>
                                        <input type="text" class="form-control" id="" name="estudiante_m">
                                    </div>
                                    
                                    <div class="mb-2">
                                        <label for="" class="form-label">Numero de Aprendices Masculinos</label>
                                        <input type="text" class="form-control" id="" name="estudiante_h">
                                    </div>

                                    <div class="mb-2">
                                        <label for="" class="form-label">Fecha de Ingreso</label>
                                        <input type="date" class="form-control" id="" name="fecha_i">
                                    </div>

                                    <div class="mb-2">
                                        <label for="" class="form-label">Fecha de Salida</label>
                                        <input type="date" class="form-control" id="" name="fecha_s">
                                    </div>

                                </div>
                                    
                                <div class="card-footer ml-auto mr-auto d-flex justify-content-center flex-column bd-highlight mb-3">
                                    <button type="submit" class="btn btn-success">Registrar</button>
                                </div>

                            </div>
                        </form>
                        
                    </div>   
                </div>
            </div>
        </div>
    </div>

@endsection