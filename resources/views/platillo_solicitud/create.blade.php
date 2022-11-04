@extends('adminlte::page')

@section('title', 'Solicitud de Platillos')

@section('content_header')
    <h1 style="text-align: center">Solicitud de Platillos</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.platillo_s')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                    <div class="mb-4 box3">
                                        <select name="solicitud" id="my-select" required="required">
                                            @foreach ($solicitudes as $item)
                                                <option value="{{$item->id}}">{{$item->cantidad_desayuno}}</option>
                                            @endforeach
                                        </select>
                                        <span>Seleccione las Solicitudes</span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="mb-4 box3">
                                        <select name="platillo" id="my-select" required="required">
                                            @foreach ($platillos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_platillo}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione los Platillos</span>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Verificar</button>
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
