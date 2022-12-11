@extends('adminlte::page')

@section('title', 'Solicitud')

@section('content_header')
    <h1 style="text-align: center">Crear solicitud</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.solicitud')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box2">
                                        <input type="date" name="date">
                                        <span>Fecha que se desea realizar el platillo</span>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Solicitar</button>
                                    </div>

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
