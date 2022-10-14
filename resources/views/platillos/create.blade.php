@extends('adminlte::page')

@section('title', 'PLatillos')

@section('content_header')
    <h1 style="text-align: center">Insertar Platillos</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.platillo')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_platillo" value="{{old('nombre_platillo')}}" required="required">
                                        <span>Nombre Platillo</span>
                                        @if ($errors->has('nombre_platillo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_platillo')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_1" value="{{old('ingre_1')}}" required="required">
                                        <span>Ingrediente 1</span>
                                        @if ($errors->has('ingre_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_1')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_2" value="{{old('ingre_2')}}" required="required">
                                        <span>Ingrediente 2</span>
                                        @if ($errors->has('ingre_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_2')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_3" value="{{old('ingre_3')}}" required="required">
                                        <span>Ingrediente 3</span>
                                        @if ($errors->has('ingre_3'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_3')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_4" value="{{old('ingre_4')}}" required="required">
                                        <span>Ingrediente 4</span>
                                        @if ($errors->has('ingre_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_4')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_5" value="{{old('ingre_5')}}" required="required">
                                        <span>Ingrediente 5</span>
                                        @if ($errors->has('ingre_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_5')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Crear Platillo</button>
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
