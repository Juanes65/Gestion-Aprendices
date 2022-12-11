@extends('adminlte::page')

@section('title', 'Productos')

@section('content_header')
    <h1 style="text-align: center">Insertar productos</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('store.producto')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box3">
                                        <select name="provedor" id="my-select" required="required">
                                            @foreach ($lista_provedores as $item)
                                                <option value="{{$item->id}}">{{$item->nombre}} : {{$item->empresa}}</option>
                                            @endforeach
                                        </select>
                                        <span>Provedor</span>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="etiqueta" value="{{old('etiqueta')}}" required="required">
                                        <span>Factura</span>
                                        @if ($errors->has('etiqueta'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('etiqueta')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box2">
                                        <input type="time" name="hora" value="{{old('hora')}}" required="required">
                                        <span>Hora Llegada</span>
                                        @if ($errors->has('hora'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('hora')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_producto" value="{{old('nombre_producto')}}" required="required">
                                        <span>Nombre Producto</span>
                                        @if ($errors->has('nombre_producto'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_producto')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="marca_producto" value="{{old('marca_producto')}}" required="required">
                                        <span>Marca del Producto</span>
                                        @if ($errors->has('marca_producto'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('marca_producto')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_llegada" value="{{old('fecha_llegada')}}" required="required">
                                        <span>Fecha de Llegada</span>
                                        @if ($errors->has('fecha_llegada'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_llegada')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="lote_producto" value="{{old('lote_producto')}}" required="required">
                                        <span>Lote del Producto</span>
                                        @if ($errors->has('lote_producto'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('lote_producto')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="stock_actual" value="{{old('stock_actual')}}" required="required">
                                        <span>Catidad Reducida</span>
                                        @if ($errors->has('stock_actual'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('stock_actual')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="area" id="my-select" required="required">
                                            @foreach ($lista_areas as $item)
                                                <option value="{{$item->id}}">{{$item->nombre_area}}</option>
                                            @endforeach
                                        </select>
                                        <span>Area</span>
                                    </div>

                                </div>

                                <div class="col-lg-6 col-12">

                                    <div class="mb-4 box3">
                                        <select name="unidad_medida" id="my-select" value="{{old('unidad_medida')}}" required="required">

                                            <option value=""></option>
                                            <option value="Gramos">Gramos (GR)</option>
                                            <option value="Unidad">Unidad(U)</option>
                                            <option value="Mililitros">Mililitros (ML)</option>

                                        </select>
                                        <span>Unidad de Medida</span>

                                        @if ($errors->has('unidad'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box2">
                                        <input type="date" name="fecha_caducidad" value="{{old('fecha_caducidad')}}" required="required">
                                        <span>Fecha de Caducidad</span>
                                        @if ($errors->has('fecha_caducidad'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('fecha_caducidad')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="clasificacion_producto" value="{{old('clasificacion_producto')}}" required="required">
                                        <span>Clasificacion del Producto</span>
                                        @if ($errors->has('clasificacion_producto'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('clasificacion_producto')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="stock_minimo" value="{{old('stock_minimo')}}" required="required">
                                        <span>Stock Minimo</span>
                                        @if ($errors->has('stock_minimo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('stock_minimo')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="recibo" value="{{old('recibo')}}" required="required">
                                        <span>Quien Recive el Producto</span>
                                        @if ($errors->has('recibo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('recibo')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Añadir Producto</button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
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
