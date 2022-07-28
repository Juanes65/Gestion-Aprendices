@extends('adminlte::page')

@section('title', 'Novedad')

@section('content_header')
    <h1 style="text-align: center">Editar Novedad</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.novedad', $novedade->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="tipo_novedad" value="{{old('tipo_novedad',$novedade->tipo_novedad)}}" required="required">
                                        <span>Tipo Novedad</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="descripcion_P" value="{{old('descripcion_P',$novedade->descripcion_P)}}" required="required">
                                        <span>Breve Descripcion</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" value="{{old('nombre',$novedade->nombre)}}" required="required">
                                        <span>Nombres y Apellidos</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="desayuno" value="{{old('desayuno',$novedade->desayuno)}}" required="reuired">
                                        <span>Desayuno</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="almuerzo" value="{{old('almuerzo',$novedade->almuerzo)}}" required="required">
                                        <span>Almuerzo</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="cena" value="{{old('cena',$novedade->cena)}}" required="required">
                                        <span>Cena</span>
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_Info" value="{{old('fecha_Info',$novedade->fecha_Info)}}">
                                        <span>Fecha del Reporte</span>
                                    </div>

                                </div>
                                    
                                <div class="d-flex justify-content-end col-12 boton">
                                    <button type="submit">Actualizar</button>
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