@extends('adminlte::page')

@section('title', 'Novedad')

@section('content_header')
    <h1 style="text-align: center">Ingresar La Novedad</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.novedad')}}" method="POST">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box3">
                                        <select name="aprendiz" id="my-select" >                                                    
                                            @foreach ($lista_aprendices as $item)
                                                <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                                            @endforeach
                                        </select>
                                        <span>Aprendiz</span>
                                    </div>
                                        
                                    <div class="mb-4 box">
                                        <input type="text" name="tipo_novedad" value="{{old('tipo_novedad')}}" required="required">
                                        <span>Tipo Novedad</span>
                                        @if ($errors->has('tipo_novedad'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('tipo_novedad')}}</span>
                                        @endif
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="descripcion_P" value="{{old('descripcion_P')}}" required="required">
                                        <span>Breve Descripcion</span>
                                        @if ($errors->has('descripcion_P'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('descripcion_P')}}</span>
                                        @endif
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
                                        @if ($errors->has('desayuno'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('desayuno')}}</span>
                                        @endif

                                    </div>
                                    
                                    <div class="mb-4 box3">

                                        <select name="almuerzo" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Almuerza</option>
                                            <option value="No">No Almuerza</option>

                                        </select>
                                        <span>Almuerzo</span>
                                        @if ($errors->has('almuerzo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('almuerzo')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="cena" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Si">Si Cena</option>
                                            <option value="No">No Cena</option>

                                        </select>
                                        <span>Cena</span>
                                        @if ($errors->has('cena'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cena')}}</span>
                                        @endif

                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    
                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_Info" value="{{old('fecha_Info')}}">
                                        <span>Fecha del Reporte</span>
                                        @if ($errors->has('fecha_Info'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_Info')}}</span>
                                        @endif
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