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

                        <form action="{{route('update.ficha', $ficha->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="ficha" value="{{old('ficha',$ficha->ficha)}}" vrequired="required">
                                        <span>Numero de la Ficha</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="tutor" value="{{old('tutor',$ficha->tutor)}}" required="required">
                                        <span>Tutor Encargado</span>
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_i" value="{{old('fecha_i',$ficha->fecha_i)}}">
                                        <span>Fecha de Ingreso</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="origen" value="{{old('origen',$ficha->origen)}}" required="required">
                                        <span>Origen</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="carrera" value="{{old('carrera',$ficha->carrera)}}" required="required">
                                        <span>Programa</span>
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_s" value="{{old('fecha_s',$ficha->fecha_s)}}">
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