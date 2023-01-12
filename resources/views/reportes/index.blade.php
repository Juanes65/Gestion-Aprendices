@extends('adminlte::page')

@section('title', 'Novedad')

@section('content_header')
    <h1 style="text-align: center">Todas las novedades</h1>
    <link rel="stylesheet" href="css/tables.css">
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author table-responsive">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="novedad">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Ficha</th>
                                                <th scope="col">Desayuno</th>
                                                <th scope="col">Almuerzo</th>
                                                <th scope="col">Cena</th>
                                                <th scope="col">Fecha</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($datos as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$ficha}}</td>
                                                    <td>{{$desayuno}}</td>
                                                    <td>{{$almuerzo}}</td>
                                                    <td>{{$cena}}</td>
                                                    <td>{{$fecha}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
