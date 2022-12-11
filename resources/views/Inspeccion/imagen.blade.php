@extends('adminlte::page')

@section('title', 'Descripcion')

@section('content_header')
    <h1 style="text-align: center">Imagen</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author table-responsive">
                                <div class="card-body" style="text-align: center">
  
                                    <td>  
                                        <img src="{{asset($inpeccione->foto)}}" height="200" width="200" >
                                    </td>

                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <script src="https://kit.fontawesome.com/cf5c5d84ea.js" crossorigin="anonymous"></script>
@stop