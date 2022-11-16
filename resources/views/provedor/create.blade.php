@extends('adminlte::page')

@section('title', 'Provedor')

@section('content_header')
    <h1 style="text-align: center">Ingresar Provedor</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.provedor')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre" value="{{old('nombre')}}" required="required">
                                        <span>Nombre Provedor</span>
                                        @if ($errors->has('nombre'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="empresa" value="{{old('empresa')}}" required="required">
                                        <span>Nombre Empresa</span>
                                        @if ($errors->has('empresa'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('empresa')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Insertar</button>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
@stop