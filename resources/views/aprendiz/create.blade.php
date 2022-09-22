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

                        <form action="{{route('store.aprendiz')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                                
                            <div class="row">

                                <div class="col-lg-6 col-12">
                                        
                                    <input type="file" name="import">
                                    
                                </div>

                                <div class="col-lg-6 col-12">
                                        
                                    <div class="d-flex justify-content-end boton">
                                        <button type="submit">Importar</button>
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