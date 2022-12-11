@extends('adminlte::page')

@section('title', 'Areas')

@section('content_header')
    <h1 style="text-align: center">Editar areas</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.area', $area->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_area" value="{{old('nombre_area', $area->nombre_area)}}" required="required">
                                        <span>Nombre Area</span>
                                        @if ($errors->has('nombre_area'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_area')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="number" name="codigo" value="{{old('codigo', $area->codigo)}}" required="required">
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
                                                <option @if (old('bodega',$area->bodega)==$item->id)
                                                    @selected(true)
                                                @endif value="{{$item->id}}">{{$item->nombre_bodega}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione la Bodega</span>
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
