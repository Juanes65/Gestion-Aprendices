@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 style="text-align: center">Productos disponibles</h1>
@stop

@section('content')

{{-- Aqui pintamos las celdas de las tablas en intervalos, Verde y Blanco --}}
<style>
    .table-striped>tbody>tr:nth-child(odd)>td,
    .table-striped>tbody>tr:nth-child(odd)>th {
    background-color: #39a900;
    border: 1px solid rgb(0, 0, 0);
    font-weight: bolder;
    }
    .table-striped>tbody>tr:nth-child(even)>td,
    .table-striped>tbody>tr:nth-child(even)>th {
    background-color: rgb(255, 255, 255);
    border: 1px solid rgb(0, 0, 0);
    }
    .table-striped>thead>tr>th {
    background-color: rgb(255, 255, 255);
    }
</style>

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author table-responsive">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="producto">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Nombre del Producto</th>
                                                <th scope="col">Marca del Producto</th>
                                                <th scope="col">Unidad de Meida</th>
                                                <th scope="col">Stock Actual</th>
                                                <th scope="col">Stock Minimo</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($producto as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->nombre_producto}}</td>
                                                    <td>{{$info->marca_producto}}</td>
                                                    <td>{{$info->unidad_medida}}</td>
                                                    <td>{{$info->stock_actual}}</td>
                                                    <td>{{$info->stock_minimo}}</td>

                                                    <td class="td-actions text-center">

                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                    <a href="{{route('edit.producto', $info->id)}}" class="btn btn-outline-success"><i class="material-icons">edit</i></a>

                                                                    <form action="{{route('destroy.producto', $info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-danger" type="submit" rel="tooltip">
                                                                            <i class="material-icons">
                                                                                delete
                                                                            </i>
                                                                        </button>
                                                                    </form>

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
        $('#producto').DataTable({
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

    <script> console.log('Hi!'); </script>
    @if (session('eliminar')=='ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'La informacion se elimino correctamente.',
                'success'
            )
        </script>
    @endif

    @if (session('actualizar')=='ok')
        <script>
            Swal.fire(
                '¡Actualizado!',
                'La informacion se actualizo correctamente.',
                'success'
            )
        </script>
    @endif

    @if (session('crear')=='ok')
        <script>
            Swal.fire(
                '¡Agregado!',
                'La informacion se creo correctamente.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.form-eliminar').submit(function(e){
            e.preventDefault();
            const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: '¿Estas seguro?',
                text: "¡Esta informacion se eliminara definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {

                    this.submit();

                }else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                    'Cancelado',
                    '¡La informacion no se elimino!',
                    'error'
                    )
                }
            })
        })
    </script>
@stop
