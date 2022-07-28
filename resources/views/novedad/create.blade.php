@extends('adminlte::page')

@section('title', 'Novedad')

@section('content_header')
    <h1 style="text-align: center">Ingresar La Novedad</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.novedad')}}" method="POST">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="tipo_novedad" required="required">
                                        <span>Tipo Novedad</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="descripcion_P" required="required">
                                        <span>Breve Descripcion</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" required="required">
                                        <span>Nombres y Apellidos</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box3">

                                        <select name="desayuno" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Desayuna</option>
                                            <option value="No">No Desayuna</option>

                                        </select>
                                        <span>Desayuno</span>

                                    </div>
                                    
                                    <div class="mb-4 box3">

                                        <select name="almuerzo" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Almuerza</option>
                                            <option value="No">No Almuerza</option>

                                        </select>
                                        <span>Almuerzo</span>

                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="cena" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Cena</option>
                                            <option value="No">No Cena</option>

                                        </select>
                                        <span>Cena</span>

                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    
                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_Info">
                                        <span>Fecha del Reporte</span>
                                    </div>

                                </div>
                                    
                                <div class="d-flex justify-content-end col-12 boton">
                                    <button type="submit">Registrar</button>
                                </div>

                            </div>
                        </form>
                        
                    </div>   
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
@stop