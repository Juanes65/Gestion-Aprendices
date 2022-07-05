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
                            <div class="author table-responsive">
                                <div class="card-body">
                                    <table class="table table-bordered table-striped" id="cliente">
                                        <thead class="table-secondary">
                                            <tr style="text-align: center">
                                                <th scope="col">N° Fichas</th>
                                                <th scope="col">Origen</th>
                                                <th scope="col">Tutor</th>
                                                <th scope="col">Carrera</th>
                                                <th scope="col">Aprendices Femeninos</th>
                                                <th scope="col">Aprendices Masculinos</th>
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
                                                    <td>{{$info->fecha_i}}</td>
                                                    <td>{{$info->fecha_s}}</td>
                                                    <td class="td-actions text-center">
                                                        
                                                        <div class="dropdown">
                                                            <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fa-solid fa-bars"></i>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                
                                                                    <a href="{{route('edit.ficha', $info->id)}}" class="btn btn-outline-warning"><i class="material-icons">edit</i></a>
                                                                
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
    <script src="https://kit.fontawesome.com/cf5c5d84ea.js" crossorigin="anonymous"></script>
@stop