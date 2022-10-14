@extends('adminlte::page')

@section('title', 'Aprendices')

@section('content_header')
    @foreach($ficha as $item)
        <h1 style="text-align: center">Aprendices De La Ficha {{$item->ficha}}</h1>
    @endforeach
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
                                    <table class="table table-bordered table-striped" id="aprendiz">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Documento</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Genero</th>
                                                <th scope="col">Observaciones</th>
                                                <th scope="col">Estado</th>
                                                <th scope="col">Fecha de Entrada</th>
                                                <th scope="col">Fecha de Salida</th>
                                                <th scope="col">Acciones</th>
                                                <th scope="col">Exportar Informacion Habitacones A PDF</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($aprendiz as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->cc}}</td>
                                                    <td>{{$info->nombre}}</td>
                                                    <td>{{$info->apellido}}</td>
                                                    <td>{{$info->genero}}</td>
                                                    <td>{{$info->observaciones}}</td>
                                                    <td>{{$info->estado}}</td>
                                                    <td>{{$info->fecha_inicial}}</td>
                                                    <td>{{$info->fecha_final}}</td>
                                                    <td class="td-actions text-center">

                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">

                                                                    <a href="{{route('edit.aprendiz', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>

                                                                    <a href="{{route('index.consumos', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">restaurant</i></a>

                                                                    <a href="{{route('index.cupos',$info->id)}}" class="btn btn-outline-warning"><i class="material-icons">bed</i></a>

                                                                    <a href="{{route('create.novedad',$info->id)}}" class="btn btn-outline-warning"><i class="material-icons">warning</i></a>

                                                                    <form action="{{route('destroy.aprendiz', $info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
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
                                                    <td><a href="{{ route('dowload.cupos',$info->id) }}" class="btn btn-success btn-sm">Exportar A PDF</a></td>
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
        $('#aprendiz').DataTable({
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
