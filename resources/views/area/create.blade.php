@extends('adminlte::page')

@section('title', 'Areas')

@section('content_header')
    <h1 style="text-align: center">Agregar Areas</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.area')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_area" value="{{old('nombre_area')}}" required="required">
                                        <span>Nombre Area</span>
                                        @if ($errors->has('nombre_area'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_area')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="number" name="codigo" value="{{old('codigo')}}" required="required">
                                        <span>Codigo</span>
                                        @if ($errors->has('codigo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('codigo')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">
                                    <div class="mb-4 box3">
                                        <select name="bodega" id="my-select" required="required">
                                            @foreach ($lista_bodegas as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_bodega}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione la Bodega</span>
                                    </div>
                                </div>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Importar</button>
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
