@extends('adminlte::page')

@section('title', 'Solicitud')

@section('content_header')
    <h1 style="text-align: center">Editar Solicitudes</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.solicitud', $solicitude->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">


                                <div class="col-lg-6 col-12">

                                    {{-- <div class="mb-4 box">
                                        <input type="text" name="cantidad_desayuno" value="{{old('cantidad_desayuno',$solicitude->cantidad_desayuno)}}" required="required">
                                        <span>Total Desayunos</span>
                                        @if ($errors->has('cantidad_desayuno'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_desayuno')}}</span>
                                        @endif
                                    </div> --}}

                                    {{-- <div class="mb-4 box">
                                        <input type="text" name="cantidad_almuerzo" value="{{old('cantidad_almuerzo',$solicitude->cantidad_almuerzo)}}" required="required">
                                        <span>Total Almuerzos</span>
                                        @if ($errors->has('cantidad_almuerzo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_almuerzo')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="cantidad_cena" value="{{old('cantidad_cena',$solicitude->cantidad_cena)}}" required="required">
                                        <span>Total Cenas</span>
                                        @if ($errors->has('cantidad_cena'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_cena')}}</span>
                                        @endif
                                    </div> --}}

                                </div>

                                <div class="d-flex justify-content-center col-12 boton">
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
