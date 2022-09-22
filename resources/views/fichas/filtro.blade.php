@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Fichas Registradas</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                            <div class="author">
                                <form action="{{route('filtro.ficha')}}" method="POST">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="box2 col-md-5">
                                            <input type="date" name="start_date">
                                            <span>Fecha Inicial</span>
                                        </div>
                                        <div class="box2 col-md-5">
                                            <input type="date" name="end_date">
                                            <span>Fecha Final</span>
                                        </div>
                                        <div class="col-md-2 d-flex justify-content-around">
                                            <button id="filtrar" class="btn btn-success" type="submit">Filtrar</button>
                                        </div>
                                    </div>
                                </form> 
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="ficha">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">N° Fichas</th>
                                                <th scope="col">Origen</th>
                                                <th scope="col">Tutor</th>
                                                <th scope="col">Carrera</th>
                                                <th scope="col">Aprendices Femeninos</th>
                                                <th scope="col">Aprendices Masculinos</th>
                                                <th scope="col">Tiempo de Llegada</th>
                                                <th scope="col">Tiempo de Salida</th>
                                                <th scope="col">Fecha de Entrada</th>
                                                <th scope="col">Fecha de Salida</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($ficha as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->ficha}}</td>
                                                    <td>{{$info->origen}}</td>
                                                    <td>{{$info->tutor}}</td>
                                                    <td>{{$info->carrera}}</td>
                                                    <td>{{$info->estudiante_m}}</td>
                                                    <td>{{$info->estudiante_h}}</td>
                                                    <th>{{$info->hora_e}}</th>
                                                    <th>{{$info->hora_s}}</th>
                                                    <td>{{$info->fecha_i}}</td>
                                                    <td>{{$info->fecha_s}}</td>
                                                    <td class="td-actions text-center">
                                                        
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-center dropdown-menu-arrow">
                                                                
                                                                    <a href="{{route('edit.ficha', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>

                                                                    <a href="{{route('create.aprendiz', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">group_add</i></a>

                                                                    <a href="{{route('index.aprendiz', $info->id)}}" class="btn btn-outline-success"><i class="material-icons">boy</i></a>
                                                                
                                                                    <form action="{{route('destroy.ficha', $info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
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
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
    <script src="https://kit.fontawesome.com/cf5c5d84ea.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap5.min.css">
@stop

@section('js')

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/responsive.bootstrap5.min.js"></script>

    <script>
        $('#ficha').DataTable({
            responsive: true,
            autowidth: false,
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "No se encontraron resultados - Discula",
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