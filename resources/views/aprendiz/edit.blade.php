@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar Aprendiz</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.aprendiz', $aprendice->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="cc" value="{{old('cc',$aprendice->cc)}}" required="required">
                                        <span>Cedula</span>
                                        @if ($errors->has('cc'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cc')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" value="{{old('nombre',$aprendice->nombre)}}" required="required">
                                        <span>Nombre</span>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_inicial" value="{{old('fecha_inicial',$aprendice->fecha_inicial)}}">
                                        <span>Fecha de Ingreso</span>
                                        @if ($errors->has('fecha_inicial'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_inicial')}}</span>
                                        @endif
                                    </div>


                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="apellido" value="{{old('apellido',$aprendice->apellido)}}" required="required">
                                        <span>Apellido</span>
                                        @if ($errors->has('apellido'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('apellido')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="observaciones" value="{{old('observaciones',$aprendice->observaciones)}}" required="required">
                                        <span>Observaciones</span>
                                        @if ($errors->has('observaciones'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('observaciones')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_final" value="{{old('fecha_final',$aprendice->fecha_final)}}">
                                        <span>Fecha de Salida</span>
                                        @if ($errors->has('fecha_final'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_final')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="mb-4 box3">
                                        
                                        <select name="estado" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option @if (old('estado',$aprendice->estado)=="Activo")
                                                @selected(true)
                                            @endif  value="Ativo">Activo</option>
                                            <option @if (old('estado',$aprendice->estado)=="Inactivo")
                                                @selected(true)
                                            @endif value="Inactivo">Inactivo</option>
                                            <option @if (old('estado',$aprendice->estado)=="Retirado")
                                                @selected(true)
                                            @endif value="Retirado">Retirado</option>

                                        </select>
                                        <span>Selecione el Estado del Aprendiz</span>
                                        @if ($errors->has('estado'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('estado')}}</span>
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
