@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar dormitorio del aprendiz</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.cupos', $cupo->id)}}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-12">
                                        
                                    <div class="mb-4 box3">
                                        <select name="fk_dormitorios" id="my-select" required="required">                                                    
                                            @foreach ($lista_dormitorios as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_dor}}</option>
                                            @endforeach
                                        </select>
                                        <span>Selecione El Nuevo Dormitorio</span>
                                        @if ($errors->has('fk_dormitorios'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fk_dormitorios')}}</span>
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