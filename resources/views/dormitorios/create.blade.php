@extends('adminlte::page')

@section('title', 'Dormitorios')

@section('content_header')
    <h1 style="text-align: center">Ingresar Nuevo Dormitorio</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.dormitorio')}}" method="POST">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_dor" required="required">
                                        <span>Nombre del Dormitorio (O numero)</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="camas" required="required">
                                        <span>Capacidad del Dormitorio</span>
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="espacio" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Ordenado">Ordenado</option>
                                            <option value="Por Ordenar">Por Ordenar</option>

                                        </select>
                                        <span>Estado del Dormitorio</span>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ubicacion" required="required">
                                        <span>Ubicacion del Dormitorio</span>
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="genero" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Maculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>

                                        </select>
                                        <span>Selecione el Genero de la Dormitorio</span>
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