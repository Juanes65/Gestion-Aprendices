@extends('adminlte::page')

@section('title', 'Platillos')

@section('content_header')

    <h1 style="text-align: center">Platillos disponibles</h1>

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
                                <table class="table table-bordered table-striped" id="platillos">
                                    <thead class="table-secondary">
                                        <tr style="text-align: center">
                                            <th scope="col">Nombre Platillo</th>
                                            <!-- <th scope="col">Ingrediente 1</th>
                                            <th scope="col">Ingrediente 2</th>
                                            <th scope="col">Ingrediente 3</th>
                                            <th scope="col">Ingrediente 4</th>
                                            <th scope="col">Ingrediente 5</th> -->
                                            <th scope="col">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($platillo as $info)
                                            <tr style="text-align: center">
                                                <td>{{ $info->nombre_platillo }}</td>
                                                <!-- <td>{{ $info->ingre_1 }}</td>
                                                <td>{{ $info->ingre_2 }}</td>
                                                <td>{{ $info->ingre_3 }}</td>
                                                <td>{{ $info->ingre_4 }}</td>
                                                <td>{{ $info->ingre_5 }}</td> -->
                                                <td class="td-actions text-center">

                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-dark"
                                                            style="font-size: 20px" href="#" role="button"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="fa-solid fa-bars"></i>
                                                            <div
                                                                class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                <a href="{{ route('edit.platillo', $info->id) }}"
                                                                    class="btn btn-outline-warning"><i
                                                                        class="material-icons">edit</i></a>

                                                                <form action="{{ route('destroy.platillo', $info->id) }}"
                                                                    class="form-eliminar" method="POST"
                                                                    style="display:inline-block">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-success" type="submit"
                                                                        rel="tooltip">
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
            $('#platillos').DataTable({
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
        });
    </script>

    <script>
        console.log('Hi!');
    </script>
    @if (session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'La informacion se elimino correctamente.',
                'success'
            )
        </script>
    @endif

    @if (session('actualizar') == 'ok')
        <script>
            Swal.fire(
                '¡Actualizado!',
                'La informacion se actualizo correctamente.',
                'success'
            )
        </script>
    @endif

    @if (session('crear') == 'ok')
        <script>
            Swal.fire(
                '¡Agregado!',
                'La informacion se creo correctamente.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.form-eliminar').submit(function(e) {
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

                } else if (
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
