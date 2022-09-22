<?php

namespace App\Http\Controllers;

use App\Models\Dormitorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DormitorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion para mostrar todos los datos de la tabla dormitorio
    public function index()
    {
        //$dormitorio accede a la base de datos y me trae tosos los datos de la tabla dormitorios en forma de array
        $dormitorio=DB::select('select * from dormitorios');
        //nos devuelve la vista index de la carpeta dormitorios junto con la informacion almacenada el la variable 
        return view('dormitorios.index', compact('dormitorio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion para acceder a la vista de crear
    public function create()
    {
        //nos deveulve la vista create en la carpeta dormitorios
        return view('dormitorios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //funcion store se almcena la informacion en la base de datos en la tabla de dormitorios
    public function store(Request $request)
    {
        //nos aseguramos que la informacion que deseamos se requerida
        $request->validate([
            'nombre_dor' => 'required',
            'camas' => 'required',
            'ubicacion' => 'required',
            'genero' => 'required',
            'espacio' => 'required'
        ]);
        
        //$input almacena el valor del campo camas del formulario creado
        $input = $request->camas;

        //verificamos si el dato es igual a 0 o no
        if($input == "0"){
            //accede a la base de datos tabla dormitorios y accede a la funcion create donde se lamacena lo que me
            //trae del furmulario y en estao se almacena Ocupado
            DB::table('dormitorios')->insert([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Ocupado",
            ]);
        }else{
            //realiza la misma operacion anterior mencionada solo que el estado cambia a Disponible
            DB::table('dormitorios')->insert([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Disponible",
            ]);    
        }
        //nos redirige a la ruta que le asignemos
        return redirect()->route('index.dormitorio')->with('crear','ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    public function show(Dormitorio $dormitorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    //funcion edit accede a la vista para editar la informacion
    public function edit(Dormitorio $dormitorio)
    {
        //nos devuelve la vista edit en la carpeta dormitorios junto con el id
        return view('dormitorios.edit', compact('dormitorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    //funcion update atualiza la informacion
    public function update(Request $request, $id)
    {
        //verificanos que la informacion que deseamos sea requerida
        $request->validate([
            'nombre_dor' => 'required',
            'camas' => 'required',
            'ubicacion' => 'required',
            'genero' => 'required',
            'espacio' => 'required'
        ]);

        //$dormitorio accedemos al id de la tabla dormitorio
        $dormitorio = Dormitorio::find($id);

        //$var almacena el genero de la tabla dormitorios
        $var = DB::select('select genero from dormitorios where id = ?', [$id]);

        //tranformamos la informacion en texto y lo almacenamos en la variable $genero
        foreach($var as $ver){
            $genero = $ver->genero;
        };

        //verificamos que la varaible genero sea igual a masculino o femenino
        if($genero == "Femenino"){
            //$cuenta almacena una cuenta donde mediga cuantos aprendices femeninos hay en el dormitorio
            $cuenta = DB::table('cupos')->join('dormitorios','dormitorios.id','=','cupos.fk_dormitorios')
                        ->join('aprendices','aprendices.id','=','cupos.fk_estudiantes')
                        ->select('cupos.fk_dormitorios, cupos.fk_aprendiz, aprendices.desayuno.cena, fecha')
                        ->where('fk_dormitorios',[$id])->where('aprendices.genero','Femenino')->count();
                        
        }else{
            //$cuenta almacena una cuenta donde mediga cuantos aprendices masculinos hay en el dormitorio
            $cuenta = DB::table('cupos')->join('dormitorios','dormitorios.id','=','cupos.fk_dormitorios')
                        ->join('aprendices','aprendices.id','=','cupos.fk_estudiantes')
                        ->select('cupos.fk_dormitorios, cupos.fk_aprendiz, aprendices.desayuno.cena, fecha')
                        ->where('fk_dormitorios',[$id])->where('aprendices.genero','Masculino')->count();
        }

        //$suma almacena al total de camas que hay en el dormitorio
        $suma = DB::select('select camas from dormitorios where id = ?', [$id]);
        //accedemos a la informacion para que la transforme en texto
        foreach($suma as $var){
            $resta = $var->camas;
        };
        //$total se almacena la resta de la varieble cuenta y la variable resta para saber la disponibilidad del dormitorio
        $total = $resta-$cuenta;

        //comprobamos que el total se menor o igual a 0
        if($total <= 0){
            //accede a la base de datos y a la funcion actualizar y segun el resultado estado se almacena ocupado
            $dormitorio->update([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'disponible' => $total,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Ocupado",
            ]);
            return redirect()->route('index.dormitorio');
        }else{
            //accede a la base de datos y a la funcion actualizar y segun el resultado estado se almacena disponible
            $dormitorio->update([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'disponible' => $total,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Disponible",
            ]);
            //nos redirige a la ruta que asignemos
            return redirect()->route('index.dormitorio')->with('actualizar','ok');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    //funcion destroy elimina la informacion
    public function destroy(Dormitorio $dormitorio)
    {
        //accede al id y a la funcion eliminar para eliminar la informacion
        $dormitorio->delete();
        //nos redirige a la ruta que signemos
        return redirect()->route('index.dormitorio')->with('eliminar','ok');
    }
}
