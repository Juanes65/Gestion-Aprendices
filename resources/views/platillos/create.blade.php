@extends('adminlte::page')

@section('title', 'PLatillos')

@section('content_header')
    <h1 style="text-align: center">Insertar platillos</h1>
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
                                        <input type="text" name="nombre_platillo" value="{{old('nombre_platillo')}}">
                                        <span>Nombre Platillo</span>
                                        @if ($errors->has('nombre_platillo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_platillo')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">

                                    <div class="mb-4 box3">
                                        <select name="ingre_1" id="my-select">
                                            <option value=""></option>
                                            @foreach ($lista_productos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_producto}} : {{$item->marca_producto}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione El Ingrediente 1</span>
                                        @if ($errors->has('ingre_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_1')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="ingre_2" id="my-select">
                                            <option value=""></option>
                                            @foreach ($lista_productos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_producto}} : {{$item->marca_producto}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione El Ingrediente 2</span>
                                        @if ($errors->has('ingre_2'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_2')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="ingre_3" id="my-select">
                                            <option value=""></option>
                                            @foreach ($lista_productos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_producto}} : {{$item->marca_producto}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione El Ingrediente 3</span>
                                        @if ($errors->has('ingre_3'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_3')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="ingre_4" id="my-select">
                                            <option value=""></option>
                                            @foreach ($lista_productos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_producto}} : {{$item->marca_producto}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione El Ingrediente 4</span>
                                        @if ($errors->has('ingre_4'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_4')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="ingre_5" id="my-select">
                                            <option value=""></option>
                                            @foreach ($lista_productos as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_producto}} : {{$item->marca_producto}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione El Ingrediente 5</span>
                                        @if ($errors->has('ingre_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_5')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_1" value="{{old('cantidad_1')}}">
                                        <span>Cantidad 1</span>
                                        @if ($errors->has('cantidad_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_1')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_2" value="{{old('cantidad_2')}}">
                                        <span>Cantidad 2</span>
                                        @if ($errors->has('cantidad_2'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_2')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_3" value="{{old('cantidad_3')}}">
                                        <span>Cantidad 3</span>
                                        @if ($errors->has('v'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_3')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_4" value="{{old('cantidad_4')}}">
                                        <span>Cantidad 4</span>
                                        @if ($errors->has('cantidad_4'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_4')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_5" value="{{old('cantidad_5')}}">
                                        <span>Cantidad 5</span>
                                        @if ($errors->has('cantidad_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_5')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">

                                    <div class="mb-4 box3">
                                        <select name="unidad_1" id="my-select" value="{{old('unidad_1')}}">

                                            <option value=""></option>
                                            <option value="Gramos">Gramos (GR)</option>
                                            <option value="Unidad">Unidad(U)</option>
                                            <option value="Mililitros">Mililitros (ML)</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_1')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_2" id="my-select" value="{{old('unidad_2')}}">

                                            <option value=""></option>
                                            <option value="Gramos">Gramos (GR)</option>
                                            <option value="Unidad">Unidad(U)</option>
                                            <option value="Mililitros">Mililitros (ML)</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad_2'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_2')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_3" id="my-select" value="{{old('unidad_3')}}">

                                            <option value=""></option>
                                            <option value="Gramos">Gramos (GR)</option>
                                            <option value="Unidad">Unidad(U)</option>
                                            <option value="Mililitros">Mililitros (ML)</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad_3'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_3')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_4" id="my-select" value="{{old('unidad_4')}}">

                                            <option value=""></option>
                                            <option value="Gramos">Gramos (GR)</option>
                                            <option value="Unidad">Unidad(U)</option>
                                            <option value="Mililitros">Mililitros (ML)</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad_4'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_4')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_5" id="my-select" value="{{old('unidad_5')}}">

                                            <option value=""></option>
                                            <option value="Gramos">Gramos (GR)</option>
                                            <option value="Unidad">Unidad(U)</option>
                                            <option value="Mililitros">Mililitros (ML)</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_5')}}</span>
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
