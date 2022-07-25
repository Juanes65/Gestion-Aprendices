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

                        <form action="{{route('update.cocina', $reporte->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                                
                            <div class="row">

                        

                                <div class="col-lg-12">
                                   
                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha" value="{{old('fecha',$reporte->fecha)}}">
                                        <span>Fecha </span>
                                    </div>

                                </div>
                                    
                                <div class="d-flex justify-content-end col-12 boton">
                                    <button type="submit">Editar</button>
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