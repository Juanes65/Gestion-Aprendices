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
                                    <table class="table table-bordered table-striped" id="cliente">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">Cedula</th>
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apellidos</th>
                                                <th scope="col">Edad</th>
                                                <th scope="col">Genero</th>
                                                <th scope="col">Desayuno</th>
                                                <th scope="col">Almuerzo</th>
                                                <th scope="col">Cena</th>
                                                <th scope="col">Observaciones</th>
                                                <th scope="col">Fecha de Entrada</th>
                                                <th scope="col">Fecha de Salida</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($aprendiz as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->cc}}</td>
                                                    <td>{{$info->nombre}}</td>
                                                    <td>{{$info->apellido}}</td>
                                                    <td>{{$info->edad}}</td>
                                                    <td>{{$info->genero}}</td>
                                                    <td>{{$info->desayuno}}</td>
                                                    <td>{{$info->almuerzo}}</td>
                                                    <td>{{$info->cena}}</td>
                                                    <td>{{$info->observaciones}}</td>
                                                    <td>{{$info->fecha_ingreso}}</td>
                                                    <td>{{$info->fecha_salida}}</td>
                                                    <td class="td-actions text-center">
                                                        
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                
                                                                    <a href="{{route('edit.aprendiz', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>
                                                                
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