@extends('adminlte::page')

@section('title', 'Platillos')

@section('content_header')
    <h1 style="text-align: center">Editar Platillo</h1>
@stop

@section('content')

    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">

                        <form action="{{ route('update.platillo', $platillo->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="row">

                                <div class="col-lg-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="nombre_platillo" value="{{old('nombre_platillo',$platillo->nombre_platillo)}}">
                                        <span>Nombre Platillo</span>
                                        @if ($errors->has('nombre_platillo'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('nombre_platillo')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_1" value="{{old('ingre_1',$platillo->ingre_1)}}">
                                        <span>Ingrediente 1</span>
                                        @if ($errors->has('ingre_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_1')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_2" value="{{old('ingre_2',$platillo->ingre_2)}}">
                                        <span>Ingrediente 2</span>
                                        @if ($errors->has('ingre_2'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_2')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_3" value="{{old('ingre_3',$platillo->ingre_3)}}">
                                        <span>Ingrediente 3</span>
                                        @if ($errors->has('ingre_3'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_3')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_4" value="{{old('ingre_4',$platillo->ingre_4)}}">
                                        <span>Ingrediente 4</span>
                                        @if ($errors->has('ingre_4'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_4')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="text" name="ingre_5" value="{{old('ingre_5',$platillo->ingre_5)}}">
                                        <span>Ingrediente 5</span>
                                        @if ($errors->has('ingre_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('ingre_5')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_1" value="{{old('cantidad_1',$platillo->cantidad_1)}}">
                                        <span>Cantidad 1</span>
                                        @if ($errors->has('cantidad_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_1')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_2" value="{{old('cantidad_2',$platillo->cantidad_2)}}">
                                        <span>Cantidad 2</span>
                                        @if ($errors->has('cantidad_2'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_2')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_3" value="{{old('cantidad_3',$platillo->cantidad_3)}}">
                                        <span>Cantidad 3</span>
                                        @if ($errors->has('v'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_3')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_4" value="{{old('cantidad_4',$platillo->cantidad_4)}}">
                                        <span>Cantidad 4</span>
                                        @if ($errors->has('cantidad_4'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_4')}}</span>
                                        @endif
                                    </div>

                                    <div class="mb-4 box">
                                        <input type="number" name="cantidad_5" value="{{old('cantidad_5',$platillo->cantidad_5)}}">
                                        <span>Cantidad 5</span>
                                        @if ($errors->has('cantidad_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('cantidad_5')}}</span>
                                        @endif
                                    </div>

                                </div>

                                <div class="col-lg-4 col-12">

                                    <div class="mb-4 box3">
                                        <select name="unidad_1" id="my-select" value="{{old('unidad_1')}}">                                                    

                                            <option value=""></option>
                                            <option @if (old('unidad',$platillo->unidad_1)=="Litro")
                                                @selected(true)
                                            @endif value="Litro">l.</option>

                                            <option @if (old('unidad',$platillo->unidad_1)=="Mililitro")
                                                @selected(true)
                                            @endif value="Mililitro">ml.</option>

                                            <option @if (old('unidad',$platillo->unidad_1)=="Centímetros cúbicos")
                                                @selected(true)
                                            @endif value="Centímetros cúbicos">c.c.</option>

                                            <option @if (old('unidad',$platillo->unidad_1)=="Gramo")
                                                @selected(true)
                                            @endif value="Gramo">gr.</option>
                                            
                                            <option @if (old('unidad',$platillo->unidad_1)=="Kilogramo")
                                                @selected(true)
                                            @endif value="Kilogramo">Kg.</option>

                                            <option @if (old('unidad',$platillo->unidad_1)=="Libra")
                                                @selected(true)
                                            @endif value="Libra">lb.</option>

                                        </select>
                                        <span>Unidad de Medida</span>
                                        
                                        @if ($errors->has('unidad_1'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_1')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_2" id="my-select" value="{{old('unidad_2')}}">                                                    

                                            <option value=""></option>
                                            <option @if (old('unidad',$platillo->unidad_2)=="Litro")
                                                @selected(true)
                                            @endif value="Litro">l.</option>

                                            <option @if (old('unidad',$platillo->unidad_2)=="Mililitro")
                                                @selected(true)
                                            @endif value="Mililitro">ml.</option>

                                            <option @if (old('unidad',$platillo->unidad_2)=="Centímetros cúbicos")
                                                @selected(true)
                                            @endif value="Centímetros cúbicos">c.c.</option>

                                            <option @if (old('unidad',$platillo->unidad_2)=="Gramo")
                                                @selected(true)
                                            @endif value="Gramo">gr.</option>
                                            
                                            <option @if (old('unidad',$platillo->unidad_2)=="Kilogramo")
                                                @selected(true)
                                            @endif value="Kilogramo">Kg.</option>

                                            <option @if (old('unidad',$platillo->unidad_2)=="Libra")
                                                @selected(true)
                                            @endif value="Libra">lb.</option>

                                        </select>
                                        <span>Unidad de Medida</span>
                                        
                                        @if ($errors->has('unidad_2'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_2')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_3" id="my-select" value="{{old('unidad_3')}}">                                                    

                                            <option value=""></option>
                                            <option @if (old('unidad',$platillo->unidad_3)=="Litro")
                                                @selected(true)
                                            @endif value="Litro">l.</option>

                                            <option @if (old('unidad',$platillo->unidad_3)=="Mililitro")
                                                @selected(true)
                                            @endif value="Mililitro">ml.</option>

                                            <option @if (old('unidad',$platillo->unidad_3)=="Centímetros cúbicos")
                                                @selected(true)
                                            @endif value="Centímetros cúbicos">c.c.</option>

                                            <option @if (old('unidad',$platillo->unidad_3)=="Gramo")
                                                @selected(true)
                                            @endif value="Gramo">gr.</option>
                                            
                                            <option @if (old('unidad',$platillo->unidad_3)=="Kilogramo")
                                                @selected(true)
                                            @endif value="Kilogramo">Kg.</option>

                                            <option @if (old('unidad',$platillo->unidad_3)=="Libra")
                                                @selected(true)
                                            @endif value="Libra">lb.</option>

                                        </select>
                                        <span>Unidad de Medida</span>
                                        
                                        @if ($errors->has('unidad_3'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_3')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_4" id="my-select" value="{{old('unidad_4')}}">                                                    

                                            <option value=""></option>
                                            <option @if (old('unidad',$platillo->unidad_4)=="Litro")
                                                @selected(true)
                                            @endif value="Litro">l.</option>

                                            <option @if (old('unidad',$platillo->unidad_4)=="Mililitro")
                                                @selected(true)
                                            @endif value="Mililitro">ml.</option>

                                            <option @if (old('unidad',$platillo->unidad_4)=="Centímetros cúbicos")
                                                @selected(true)
                                            @endif value="Centímetros cúbicos">c.c.</option>

                                            <option @if (old('unidad',$platillo->unidad_4)=="Gramo")
                                                @selected(true)
                                            @endif value="Gramo">gr.</option>
                                            
                                            <option @if (old('unidad',$platillo->unidad_4)=="Kilogramo")
                                                @selected(true)
                                            @endif value="Kilogramo">Kg.</option>

                                            <option @if (old('unidad',$platillo->unidad_4)=="Libra")
                                                @selected(true)
                                            @endif value="Libra">lb.</option>

                                        </select>
                                        <span>Unidad de Medida</span>
                                        
                                        @if ($errors->has('unidad_4'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_4')}}</span>
                                        @endif

                                    </div>

                                    <div class="mb-4 box3">
                                        <select name="unidad_5" id="my-select" value="{{old('unidad_5')}}">                                                    

                                            <option value=""></option>
                                            <option @if (old('unidad',$platillo->unidad_5)=="Litro")
                                                @selected(true)
                                            @endif value="Litro">l.</option>

                                            <option @if (old('unidad',$platillo->unidad_5)=="Mililitro")
                                                @selected(true)
                                            @endif value="Mililitro">ml.</option>

                                            <option @if (old('unidad',$platillo->unidad_5)=="Centímetros cúbicos")
                                                @selected(true)
                                            @endif value="Centímetros cúbicos">c.c.</option>

                                            <option @if (old('unidad',$platillo->unidad_5)=="Gramo")
                                                @selected(true)
                                            @endif value="Gramo">gr.</option>
                                            
                                            <option @if (old('unidad',$platillo->unidad_5)=="Kilogramo")
                                                @selected(true)
                                            @endif value="Kilogramo">Kg.</option>

                                            <option @if (old('unidad',$platillo->unidad_5)=="Libra")
                                                @selected(true)
                                            @endif value="Libra">lb.</option>

                                        </select>
                                        <span>Unidad de Medida</span>
                                        
                                        @if ($errors->has('unidad_5'))
                                            <span class="error text-danger" for="input-name">{{$errors->first('unidad_5')}}</span>
                                        @endif

                                    </div>

                                </div>

                                <div class="col-lg-12">

                                    <div class="d-flex justify-content-center boton">
                                        <button type="submit">Crear Platillo</button>
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
    <link rel="stylesheet" href="{{ asset('css/button.css') }}">
@stop
