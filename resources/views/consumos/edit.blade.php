@extends('adminlte::page')

@section('title', 'Fichas')

@section('content_header')
    <h1 style="text-align: center">Editar consumos</h1>
@stop

@section('content')

    <div class="card-body">                       
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{route('update.consumos', $consumo->id)}}" method="POST">

                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <label>Desayunno</label>
                                        </div>
    
                                        <div class="col-md-6 col-6">
                                            <div class="form-check form-check-inline col-md-6 col-6">
                                                <input class="form-check-input" type="radio" name="desayuno" value="Si" id="desayuno"
                                                @if (old('desayuno',$consumo->desayuno)=="Si")
                                                    @checked(true)
                                                @endif>
                                                <label class="form-check-label" for="desayuno">Si</label>
                                            </div>
                                            
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="desayuno" value="No" id="desayuno"
                                                @if (old('desayuno',$consumo->desayuno)=="No")
                                                    @checked(true)
                                                @endif>
                                                <label class="form-check-label" for="desayuno">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <label>Almuerzo</label>
                                        </div>
    
                                        <div class="col-md-6 col-6">
                                            <div class="form-check form-check-inline col-md-6 col-6">
                                                <input class="form-check-input" type="radio" name="almuerzo" value="Si" id="almuerzo"
                                                @if (old('almuerzo',$consumo->almuerzo)=="Si")
                                                    @checked(true)
                                                @endif>
                                                <label class="form-check-label" for="almuerzo">Si</label>
                                            </div>
                                            
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="almuerzo" value="No" id="almuerzo"
                                                @if (old('almuerzo',$consumo->almuerzo)=="No")
                                                    @checked(true)
                                                @endif>
                                                <label class="form-check-label" for="almuerzo">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <label>Cena</label>
                                        </div>
    
                                        <div class="col-md-6 col-6">
                                            <div class="form-check form-check-inline col-md-6 col-6">
                                                <input class="form-check-input" type="radio" name="cena" value="Si" id="cena"
                                                @if (old('cena',$consumo->cena)=="Si")
                                                    @checked(true)
                                                @endif>
                                                <label class="form-check-label" for="cena">Si</label>
                                            </div>
                                            
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="cena" value="No" id="cena"
                                                @if (old('cena',$consumo->cena)=="No")
                                                    @checked(true)
                                                @endif>
                                                <label class="form-check-label" for="cena">No</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    
                                <div class="d-flex justify-content-center col-12 boton mt-3">
                                    <button type="submit">Actualizar</button>
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