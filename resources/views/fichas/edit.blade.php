@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar ficha</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.ficha', $ficha->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="ficha" value="{{old('ficha',$ficha->ficha)}}" vrequired="required">
                                        <span>Numero de la Ficha</span>
                                        @if ($errors->has('ficha'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ficha')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="tutor" value="{{old('tutor',$ficha->tutor)}}" required="required">
                                        <span>Tutor Encargado</span>
                                        @if ($errors->has('tutor'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('tutor')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        
                                        <select name="hora_e" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option @if (old('hora_e',$ficha->hora_e)=="Mañana")
                                                @selected(true)
                                            @endif value="Mañana">Mañana</option>
                                            <option @if (old('hora_e',$ficha->hora_e)=="Tarde")
                                                @selected(true)
                                            @endif value="Tarde">Tarder</option>

                                        </select>
                                        <span>Selecione la Jornada de Entrada</span>
                                        @if ($errors->has('hora_e'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('hora_e')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_i" value="{{old('fecha_i',$ficha->fecha_i)}}">
                                        <span>Fecha de Ingreso</span>
                                        @if ($errors->has('fecha_i'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_i')}}</span>
                                        @endif
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="origen" value="{{old('origen',$ficha->origen)}}" required="required">
                                        <span>Origen</span>
                                        @if ($errors->has('origen'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('origen')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="carrera" value="{{old('carrera',$ficha->carrera)}}" required="required">
                                        <span>Programa</span>
                                        @if ($errors->has('carrera'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('carrera')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        
                                        <select name="hora_s" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option @if (old('hora_s',$ficha->hora_s)=="Mañana")
                                                @selected(true)
                                            @endif value="Mañana">Mañana</option>
                                            <option @if (old('hora_s',$ficha->hora_s)=="Tarde")
                                                @selected(true)
                                            @endif value="Tarde">Tarder</option>

                                        </select>
                                        <span>Selecione la Jornada de Salida</span>
                                        @if ($errors->has('hora_s'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('hora_s')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_s" value="{{old('fecha_s',$ficha->fecha_s)}}">
                                        <span>Fecha de Salida</span>
                                        @if ($errors->has('fecha_s'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_s')}}</span>
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