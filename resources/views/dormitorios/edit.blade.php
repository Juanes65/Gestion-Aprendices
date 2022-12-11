@extends('adminlte::page')

@section('title', 'Dormitorios')

@section('content_header')
    <h1 style="text-align: center">Editar dormitorio</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.dormitorio', $dormitorio->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_dor" value="{{old('nombre_dor',$dormitorio->nombre_dor)}}" >
                                        <span>Nombre del Dormitorio (O numero)</span>
                                        @if ($errors->has('nombre_dor'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_dor')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="number" name="camas" value="{{old('camas',$dormitorio->camas)}}" required="required" >
                                        <span>Capacidad del Dormitorio</span>
                                        @if ($errors->has('camas'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('camas')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ubicacion" value="{{old('ubicacion',$dormitorio->ubicacion)}}" required="required">
                                        <span>Ubicacion del Dormitorio</span>
                                        @if ($errors->has('ubicacion'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ubicacion')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="genero" id="my-select" required="reuired">

                                            <option value=""></option>
                                            <option @if (old('genero',$dormitorio->genero)=="Masculino")
                                                @selected(true)
                                            @endif value="Masculino">Masculino</option>
                                            <option @if (old('genero',$dormitorio->genero)=="Femenino")
                                                @selected(true)
                                            @endif value="Femenino">Femenino</option>

                                        </select>
                                        <span>Selecione el Genero de la Dormitorio</span>
                                        @if ($errors->has('genero'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('genero')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-12">
                                    <div class="mb-4 box3">
                                        <select name="espacio" id="my-select" required="required">

                                            <option value=""></option>
                                            <option @if (old('espacio',$dormitorio->espacio)=="Limpio")
                                                @selected(true)
                                            @endif value="Limpio">Limpio</option>
                                            
                                            <option @if (old('espacio',$dormitorio->espacio)=="Por Limpiar")
                                                @selected(true)
                                            @endif value="Por Limpiar">Por Limpiar</option>

                                        </select>
                                        <span>Estado del Dormitorio</span>
                                        @if ($errors->has('espacio'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('espacio')}}</span>
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
