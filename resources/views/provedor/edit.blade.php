@extends('adminlte::page')

@section('title', 'Provedor')

@section('content_header')
    <h1 style="text-align: center">Editar Registro</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.provedor', $provedore->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" value="{{old('nombre',$provedore->nombre)}}" required="required">
                                        <span>Nombre Provedor</span>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_pro" value="{{old('nombre_pro',$provedore->nombre_pro)}}" required="required">
                                        <span>Nombre del Producto</span>
                                        @if ($errors->has('nombre_pro'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_pro')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="cantidad" value="{{old('cantidad',$provedore->cantidad)}}" required="required">
                                        <span>Cantidad</span>
                                        @if ($errors->has('cantidad'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha" value="{{old('fecha',$provedore->fecha)}}" required="required">
                                        <span>Fecha de Ingreso</span>
                                        @if ($errors->has('fecha'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="empresa" value="{{old('empresa',$provedore->empresa)}}" required="required">
                                        <span>Nombre Empresa</span>
                                        @if ($errors->has('empresa'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('empresa')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="lote" value="{{old('lote',$provedore->lote)}}" required="required">
                                        <span>Nombre Lote</span>
                                        @if ($errors->has('lote'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('lote')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="unidad" id="my-select" value="{{old('unidad')}}" required="required">                                                    

                                            <option value=""></option>

                                            <option @if (old('unidad',$provedore->unidad)=="Litro")
                                                @selected(true)
                                            @endif value="Litro">l.</option>

                                            <option @if (old('unidad',$provedore->unidad)=="Mililitro")
                                                @selected(true)
                                            @endif value="Mililitro">ml.</option>

                                            <option @if (old('unidad',$provedore->unidad)=="Centímetros cúbicos")
                                                @selected(true)
                                            @endif value="Centímetros cúbicos">c.c.</option>

                                            <option @if (old('unidad',$provedore->unidad)=="Gramo")
                                                @selected(true)
                                            @endif value="Gramo">gr.</option>
                                            
                                            <option @if (old('unidad',$provedore->unidad)=="Kilogramo")
                                                @selected(true)
                                            @endif value="Kilogramo">Kg.</option>

                                            <option @if (old('unidad',$provedore->unidad)=="Libra")
                                                @selected(true)
                                            @endif value="Libra">lb.</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="time" name="hora" value="{{old('hora',$provedore->hora)}}" required="required">
                                        <span>Hora Llegada</span>
                                        @if ($errors->has('hora'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('hora')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Actualizar</button>
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