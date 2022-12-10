@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar Reporte Restaurante</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.cocina', $restaurante->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box2">
                                        <input type="date" name="date">
                                        <span>Fecha de Ingreso de la Ficha</span>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-6 col-12">
                                   
                                    <div class="mb-4 box3">
                                        <select name="ficha_restaurante" id="my-select" required="required">                                                    
                                            @foreach ($lista_fichas as $item)
                                                <option value="{{$item->id}}">{{$item->ficha}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione la ficha Fichas</span>
                                    </div>

                                </div>

                                <div class="d-flex justify-content-center col-12 boton">
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
