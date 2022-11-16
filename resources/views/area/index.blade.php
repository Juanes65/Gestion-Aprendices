@extends('adminlte::page')

@section('title', 'Areas')

@section('content_header')
    <h1 style="text-align: center">Areas Disponibles</h1>
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
                                    <table class="table table-bordered table-striped" id="area">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Nombre del Area</th>
                                                <th scope="col">Codigo</th>
                                                <th scope="col">Bodega</th>
                                                <th scope="col">Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($area as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->nombre_area}}</td>
                                                    <td>{{$info->codigo}}</td>
                                                    <td>{{$info->nombre_bodega}}</td>
                                                    <td class="td-actions text-center">

                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                    <a href="{{route('index.producto', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">SHOW</i></a>

                                                                    <a href="{{route('create.producto', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">ADD</i></a>

                                                                    <a href="{{route('edit.area', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>

                                                                    <form action="{{route('destroy.area', $info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button class="btn btn-success" type="submit" rel="tooltip">
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
        $('#area').DataTable({
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
