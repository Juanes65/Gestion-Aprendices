@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Seleccione el Filtro</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('filtrodoc.cocina')}}" method="POST">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box2">
                                        <input type="date" name="date">
                                        <span>Ingrese la Fecha</span>
                                        @if ($errors->has('date'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('date')}}</span>
                                        @endif
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="cc" required="required">
                                        <span>Ingrese El Documento Del Aprendiz</span>
                                    </div>
                                
                                </div>
                                
                                <div class="d-flex justify-content-center col-12 boton">
                                    <button type="submit">Filtrar</button>       
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