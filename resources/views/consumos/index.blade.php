@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Consumos</h1>
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
                                    <table class="table table-bordered table-striped" id="cliente">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Desayuno</th>
                                                <th scope="col">Almuerzo</th>
                                                <th scope="col">Cena</th>
                                                <th scope="col">Fechas</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($consumo as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->desayuno}}</td>
                                                    <td>{{$info->almuerzo}}</td>
                                                    <td>{{$info->cena}}</td>
                                                    <td>{{$info->fecha}}</td>
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

@section('css')
    <script src="https://kit.fontawesome.com/cf5c5d84ea.js" crossorigin="anonymous"></script>
@stop