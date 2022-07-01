@extends('adminlte::page')

@section('title', 'Registro de Reportes')

@section('content_header')
    <h1 style="text-align: center">Reportes Registrados</h1>
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
                                                <th scope="col">Nombre</th>
                                                <th scope="col">Apelldio</th>
                                                <th scope="col">Cargo</th>
                                                <th scope="col">Area</th>
                                                <th scope="col">Tipo</th>
                                                <th scope="col">fecha</th>
                                                <th scope="col">Anexos</th>
                                                <th scope="col">Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($reporte as $reportes)
                                            <tr style="text-align: center">
                                                <td>{{$reportes->nombre}}</td>
                                                <td>{{$reportes->apellido}}</td>
                                                <td>{{$reportes->cargo}}</td>
                                                <td>{{$reportes->area}}</td>
                                                <td>{{$reportes->tipo}}</td>
                                                <td>{{$reportes->fecha}}</td>
                                                <th>
                                                    <div class="dropdown">
                                                        <a class="btn btn-sm btn-icon-only text-dark" style="font-size: 20px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fa-solid fa-bars"></i>
                                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                                <a   href="{{route('show.inspeccion', $reportes->id)}}"class="btn btn-outline-primary"><i class="material-icons">visibility</i></a>
                                                    
                                                                <a href="{{route('show2.inspeccion', $reportes->id)}}"class="btn btn-outline-success"><i class="material-icons">image</i></a>
                                                            </div>
                                                        </a>
                                                   
                                                    </div>    
                                                <td class="td-actions text-center">
                                                    
                                                
                                                        <div >
                                                    
                                                        
                                                            <form  action="{{route('destroy.inspeccion', $reportes->id)}}" class="form-eliminar" method="POST" style="display:inline-block">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-success" type="submit" rel="tooltip">
                                                                    <i class="material-icons">
                                                                        delete
                                                                    </i>
                                                                </button>
                                                            </form> 
                                                            
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