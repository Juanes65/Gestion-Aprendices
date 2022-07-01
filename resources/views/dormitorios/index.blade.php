@extends('adminlte::page')

@section('title', 'Dormitorios')

@section('content_header')
    <h1 style="text-align: center">Dormitorios Registrados</h1>
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
                                                <th scope="col">Nombre de la Habitacion</th>
                                                <th scope="col">Capacidad</th>
                                                <th scope="col">Ubicacion</th>
                                                <th scope="col">Genero</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dormitorio as $info)
                                                <tr style="text-align: center">
                                                    <td>{{$info->nombre_dor}}</td>
                                                    <td>{{$info->camas}}</td>
                                                    <td>{{$info->ubicacion}}</td>
                                                    <td>{{$info->genero}}</td>
                                                    <td class="td-actions text-center">
                                                        
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                
                                                                <a href="{{route('edit.dormitorio', $info->id)}}" class="btn btn-warning"><i class="material-icons">edit</i></a>
                                                            
                                                                <form action="{{route('destroy.dormitorio', $info->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-success" type="submit" rel="tooltip">
                                                                        <i class="material-icons">
                                                                            delete
                                                                        </i>
                                                                    </button>
                                                                </form> 
                                                                
                                                            </div> 
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