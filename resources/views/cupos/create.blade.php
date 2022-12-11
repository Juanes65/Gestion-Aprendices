@extends('adminlte::page')

@section('title', 'Cupos')

@section('content_header')
    <h1 style="text-align: center">Asignar dormitorio</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.cupos')}}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">

                                <?php for ($i=1; $i <= 1; $i++) { ?>

                                    <div class="mb-4 box3 col-lg-6 col-12">
                                        <div class="mb-4">
                                            <select name="fk_dormitorios" id="my-select" required="required">
                                                @foreach ($lista_dormitorios as $item)
                                                    <option value="{{$item->id}}">{{$item->nombre_dor}}</option>
                                                @endforeach
                                            </select>
                                            <span>Selecione El Dormitorio</span>
                                            @if ($errors->has('fk_dormitorios'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('fk_dormitorios')}}</span>
                                            @endif
                                        </div>

                                        <div class="mb-4 box2">
                                            <input type="date" name="fecha_ingreso" value="{{old('fecha_ingreso')}}">
                                            <span>Fecha de Ingreso</span>
                                            @if ($errors->has('fecha_ingreso'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('fecha_ingreso')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-4 box3 col-lg-6 col-12">
                                        <div class="mb-4">
                                            <select name="fk_estudiantes" id="my-select" required="required">
                                                @foreach ($lista_aprendices as $item)
                                                    <option value="{{$item->id}}">{{$item->ficha}}: {{$item->nombre}} {{$item->apellido}}</option>
                                                @endforeach
                                            </select>
                                            <span>Selecione El Aprendiz</span>
                                            @if ($errors->has('fk_estudiantes'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('fk_estudiantes')}}</span>
                                            @endif
                                        </div>

                                        <div class="mb-4 box2">
                                            <input type="date" name="fecha_salida" value="{{old('fecha_salida')}}">
                                            <span>Fecha de Salida</span>
                                            @if ($errors->has('fecha_salida'))
                                                <span class="error text-danger" for="input-name">{{$errors->first('fecha_salida')}}</span>
                                            @endif
                                        </div>
                                    </div>

                                <?php } ?>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Registrar</button>
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
