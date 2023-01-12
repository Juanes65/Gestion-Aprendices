@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Consumos</h1>
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
                                    <table class="table table-bordered table-striped" id="consumo">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Nombre del Aprendiz</th>
                                                <th scope="col">Apellido del Aprendiz</th>
                                                <th scope="col">Desayuno</th>
                                                <th scope="col">Almuerzo</th>
                                                <th scope="col">Cena</th>
                                                <th scope="col">Fechas</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($consumo as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->nombre}}</td>
                                                    <td>{{$info->apellido}}</td>
                                                    <td>{{$info->desayuno}}</td>
                                                    <td>{{$info->almuerzo}}</td>
                                                    <td>{{$info->cena}}</td>
                                                    <td>{{$info->fecha}}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                    <a href="{{route('edit.consumos', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>

                                                                </div>
                                                            </a>
                                                        </div>
                                                    </td>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
        $('#consumo').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados - Disculpa",
                "info": "Mostrando la página _PAGE_ de _PAGES_",
                "infoEmpty": "No records available",
                "infoFiltered": "(Filtrado de _MAX_ registros totales)",
                "search": "Buscar : ",
                "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                }

            }
        });
    } );
    </script>

@stop

