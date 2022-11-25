@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Inicio</h1>
@stop




@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos Pronto a Agotarse') }}</div>

                <div class="card-body">
                    
                        @foreach ($info as $item)
                            <h4 style="color: red;font-family: Verdana, Geneva, Tahoma, sans-serif;">El Produto {{$item->nombre_producto}} ({{$item->marca_producto}}) tiene pocas esxistencias.</h4>
                            <br>
                        @endforeach 
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
