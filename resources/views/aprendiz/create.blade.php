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
                                        <input type="text" name="cc" required="required">
                                        <span>Cedula</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" required="required">
                                        <span>Nombre</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="apellido" required="required">
                                        <span>Apellido</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="edad" required="required">
                                        <span>edad</span>
                                    </div>

                                    <div class="mb-4 box3">

                                        <select name="genero" id="my-select" required="required">                                                    

                                            <option value=""></option>
                                            <option value="Maculino">Masculino</option>
                                            <option value="Femenino">Femenino</option>

                                        </select>
                                        <span>Selecione el Genero del Aprendiz</span>

                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_ingreso">
                                        <span>Fecha de Ingreso</span>
                                    </div>
                                
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="desayuno" required="reuired">
                                        <span>Desayuno</span>
                                    </div>
                                    
                                    <div class="mb-4 box">
                                        <input type="text" name="almuerzo" required="required">
                                        <span>Almuerzo</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="cena" required="required">
                                        <span>Cena</span>
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="observaciones" required="required">
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
                                        <input type="date" name="fecha_salida">
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