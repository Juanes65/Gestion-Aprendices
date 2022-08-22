@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Ingresar Nueva Ficha</h1>
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
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="ficha" required="required">
                                        <span>Numero de la Ficha</span>
                                        @if ($errors->has('ficha'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ficha')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="tutor" required="required">
                                        <span>Tutor Encargado</span>
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_i">
                                        <span>Fecha de Ingreso</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="origen" required="required">
                                        <span>Origen</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="carrera" required="required">
                                        <span>Programa</span>
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_s">
                                        <span>Fecha de Salida</span>
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