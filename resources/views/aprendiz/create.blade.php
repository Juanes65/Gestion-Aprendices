@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Ingresar Aprendices</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.aprendiz')}}" method="POST">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="cc" required="required" value="{{old('cc')}}">
                                        <span>Cedula</span>
                                        @if ($errors->has('cc'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cc')}}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" required="required" value="{{old('nombre')}}">
                                        <span>Nombre</span>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="apellido" required="required" value="{{old('apellido')}}">
                                        <span>Apellido</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="edad" required="required" value="{{old('edad')}}">
                                        <span>edad</span>
                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="genero" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Masculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>

                                        </select>
                                        <span>Selecione el Genero del Aprendiz</span>

                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_ingreso" value="{{old('fecha_ingreso')}}">
                                        <span>Fecha de Ingreso</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box3">

                                        <select name="desayuno" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Desayuna</option>
                                            <option value="No">No Desayuna</option>

                                        </select>
                                        <span>Desayuno</span>

                                    </div>
                                    
                                    <div class="mb-4 box3">

                                        <select name="almuerzo" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Almuerza</option>
                                            <option value="No">No Almuerza</option>

                                        </select>
                                        <span>Almuerzo</span>

                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="cena" id="my-select" required="required" value="{{old('cena')}}">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Cena</option>
                                            <option value="No">No Cena</option>

                                        </select>
                                        <span>Cena</span>

                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="observaciones" required="required" value="{{old('observaciones')}}">
                                        <span>Observaciones</span>
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="aprendiz_ficha" id="my-select" required="required">                                                    
                                            @foreach ($lista_fichas as $item)
                                                <option value="{{$item->id}}">{{$item->ficha}}</option>
                                            @endforeach

                                        </select>
                                        <span>Fichas</span>
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_salida" value="{{old('fecha_salida')}}">
                                        <span>Fecha de Salida</span>
                                    </div>

                                </div>
                                    
                                <div class="d-flex justify-content-end col-12 boton">
                                    <button type="submit">Registrar</button>
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