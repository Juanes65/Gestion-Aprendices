@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Ingresar aprendices</h1>
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

                                <div class="mb-3 col-12">

                                    <input class="form-control" type="file" name="import">

                                </div>


                                <div class="col-lg-12 d-flex justify-content-center boton">
                                        
                                    <button type="submit">Importar</button>

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