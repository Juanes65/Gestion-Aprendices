@extends('adminlte::page')

@section('title', 'Reporte')

@section('content_header')
    <h1 style="text-align: center">Ingresar Reporte</h1>
@stop

@section('content')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>
        <script src="app2.js"></script>
    </head>
    <body>
        <div class="card-body">                       
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-user">
                        <div class="card-body">
    
                            <form  action="{{route('store.inspeccion')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                    
                                <div class="row mb-3">
                                            
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Nombres:</label>
                                        <input type="text" placeholder="Nombres Completos" class="form-control" id="" name="nombre">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">Apellidos:</label>
                                        <input type="text" class="form-control" placeholder="Apellidos Completos" id="" name="apellido">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">cargo:</label>
                                        <select class="form-select" aria-label="Default select example"  name="cargo">
                                            <option value="Aprendiz">   Aprendiz   </option>
                                            <option value="Instructor"> Instructor </option>
                                            <option value="Operario">   Operario   </option>
                                            <option value="Otro">       Otro       </option>
                                            
                                        </select>    
                                    </div>
                                
                                
                                </div>
    
                                    <div class="row mb-3">
                                            
                                        <div class="col-md-8">
                                            <label for="" class="form-label">Tipo de Informe:</label>
                                            <input type="text" class="form-control" placeholder="Ej: (Camas en mal estado, Daños en general, Elementos perdidos,etc...)"id="" name="tipo">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Area:</label>
                                            <select class="form-select" aria-label="Default select example"  name="area">
                                                <option value="Restaurante">            Restaurante           </option>
                                                <option value="Dormitorio de Mujeres">  Dormitorio de Mujeres </option>
                                                <option value="BDormitorio de Hombres"> Dormitorio de Hombres </option>
                                                
                                            </select>    
                                        </div>
                                    
                                    
                                    </div>
    
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Descripcion del Informe:</label>
                                        <textarea class="form-control" name="descripcion" id="" rows="5"></textarea>
                                    </div>
                                    
                                    <div class="row mb-3">
    
                                               <div class="col-md-8" display:inline-block>
                              
                                            <label >Anexar Soporte Fotografico:</label>
                                                
                                            <p>
                                                 FOTO:
                                                 <input type="file" name="img">
                                            </p>     
                
                                        </div>
                                        <div class="col-md-4">
                                            <label for="" class="form-label">Fecha </label>
                                            <input type="date" class="form-control" id="" name="fecha">
                                        </div>
                                      
                                 
    
                                    </div>
                                    
                               
                                    <div class="d-flex justify-content-end col-12">
                                        <button type="submit"  class="btn btn-success" >Guardar Reporte</button>
                                    </div>
    
                                
                            </form>
                            
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </body>

   

@endsection