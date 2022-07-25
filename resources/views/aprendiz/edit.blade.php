@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar Ficha</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.aprendiz', $aprendice->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="cc" value="{{old('cc',$aprendice->cc)}}" required="required">
                                        <span>Cedula</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" value="{{old('nombre',$aprendice->nombre)}}" required="required">
                                        <span>Nombre</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="apellido" value="{{old('apellido',$aprendice->apellido)}}" required="required">
                                        <span>Apellido</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="edad" value="{{old('edad',$aprendice->edad)}}" required="required">
                                        <span>edad</span>
                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="genero" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Maculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>

                                        </select>
                                        <span>Selecione el Genero del Aprendiz</span>

                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_ingreso" value="{{old('fecha_ingreso',$aprendice->fecha_ingreso)}}">
                                        <span>Fecha de Ingreso</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="desayuno" value="{{old('desayuno',$aprendice->desayuno)}}" required="reuired">
                                        <span>Desayuno</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="almuerzo" value="{{old('almuerzo',$aprendice->almuerzo)}}" required="required">
                                        <span>Almuerzo</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="cena" value="{{old('cena',$aprendice->cena)}}" required="required">
                                        <span>Cena</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="observaciones" value="{{old('observaciones',$aprendice->observaciones)}}" required="required">
                                        <span>Observaciones</span>
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_salida" value="{{old('fecha_salida',$aprendice->fecha_salida)}}">
                                        <span>Fecha de Salida</span>
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