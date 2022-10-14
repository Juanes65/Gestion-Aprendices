@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Reporte de Alimentacion Por Filtro</h1>
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
                                    <table class="table table-bordered table-striped" id="restaurante">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Documento</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellido</th>
                                                <th scope="col">Total Desayunos</th>
                                                <th scope="col">Total Almuerzos</th>
                                                <th scope="col">Total Cenas</th>
                                                <th scope="col">Descargar PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr style="text-align: center">
                                                <td>{{$cc}}</td>
                                                <td>{{$nombre}}</td>
                                                <td>{{$apellido}}</td>
                                                <td>{{$desayuno}}</td>
                                                <td>{{$almuerzo}}</td>
                                                <td>{{$cena}}</td>
                                                <td><a href="{{ route('dowload.cocina',$id) }}" class="btn btn-success btn-sm">Exportar A PDF</a></td>
                                            </tr>
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
        $('#restaurante').DataTable({
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
