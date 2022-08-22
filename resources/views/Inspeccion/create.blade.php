@extends('adminlte::page')

@section('title', 'Reporte')

@section('content_header')
    <h1 style="text-align: center">Ingresar Reporte De Inspeccion</h1>
@stop

@section('content')

<html lang="es">
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
                                            
                                    <div class="col-md-4 mb-4 box">
                                        <input type="text" name="nombre" required="required">
                                        <span>Nombres:</span>
                                    </div>

                                    <div class="col-md-4 mb-4 box">
                                        <input type="text" name="apellido" required="required">
                                        <span>Apellidos:</span>
                                    </div>

                                    <div class="col-md-4 mb-4 box3">
                                        <select id="my-select" name="cargo" required="required">

                                            <option value=""></option>
                                            <option value="Aprendiz">   Aprendiz   </option>
                                            <option value="Instructor"> Instructor </option>
                                            <option value="Operario">   Operario   </option>
                                            <option value="Otro">       Otro       </option>
                                            
                                        </select>
                                        <span>cargo:</span>  
                                    </div>
                                
                                
                                </div>
    
                                    <div class="row mb-3">
                                            
                                        <div class="col-md-8 mb-4 box2">
                                            <input type="text" placeholder="Ej: (Camas en mal estado, Daños en general, Elementos perdidos,etc...)" name="tipo">
                                            <span>Tipo de Informe:</span>
                                        </div>

                                        <div class="col-md-4 box3">

                                            <select id="my-select" name="area">

                                                <option value="Restaurante">            Restaurante           </option>
                                                <option value="Dormitorio de Mujeres">  Dormitorio de Mujeres </option>
                                                <option value="BDormitorio de Hombres"> Dormitorio de Hombres </option>
                                                
                                            </select>
                                            <span>Area:</span>  
                                        </div>
                                    
                                    
                                    </div>
    
                                    <div class="mb-3 box4">
                                        <textarea class="texto" name="descripcion" rows="5" required="required"></textarea>
                                        <span>Descripcion del Informe:</span>
                                    </div>
                                    
                                    <div class="row mb-3">
    
                                            <div class="col-md-8 box5" display:inline-block>
                              
                                            <span >Anexar Soporte Fotografico:</span>
                                                
                                            <p>
                                                FOTO:
                                                <input type="file" name="img">
                                            </p>     
                
                                        </div>
                                        <div class="col-md-4 box2">
                                            <input type="date" name="fecha" required="required">    
                                            <span>Fecha:</span>
                                        </div>
                                      
                                 
    
                                    </div>
                                    
                               
                                    <div class="d-flex justify-content-end col-12 boton">
                                        <button type="submit">Guardar Reporte</button>
                                    </div>
    
                                
                            </form>
                            
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </body>

@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('css/button.css')}}">
@stop