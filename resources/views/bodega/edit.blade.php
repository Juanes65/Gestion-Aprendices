@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar bodegas</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.bodega', $bodega->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_bodega" value="{{old('nombre_bodega', $bodega->nombre_bodega)}}" required="required">
                                        <span>Nombre Bodega</span>
                                        @if ($errors->has('nombre_bodega'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_bodega')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="descripcion_bodega" value="{{old('descripcion_bodega', $bodega->descripcion_bodega)}}" required="required">
                                        <span>Descripcion Bodega</span>
                                        @if ($errors->has('descripcion_bodega'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('descripcion_bodega')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="mb-4 box">
                                        <input type="text" name="direccion_bodega" value="{{old('direccion_bodega', $bodega->direccion_bodega)}}" required="required">
                                        <span>Direccion Bodega</span>
                                        @if ($errors->has('direccion_bodega'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('direccion_bodega')}}</span>
                                        @endif
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
