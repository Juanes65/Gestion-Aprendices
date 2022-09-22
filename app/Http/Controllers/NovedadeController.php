<?php

namespace App\Http\Controllers;

use App\Models\Novedade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NovedadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion index muestra la vista index
    public function index()
    {
        //$novedad accede a la base de datos a la tabla novedades, aprendices y fichas por medio de inners joins y nos manda una array con informacion
        $novedad = DB::select('select novedades.*, aprendices.nombre, aprendices.apellido, fichas.ficha from novedades 
                                inner join aprendices on aprendices.id = novedades.aprendiz inner join fichas on fichas.id = aprendices.aprendiz_ficha');

        //nos devuelve la vista index de la carpeta novedad
        return view('novedad.index', compact('novedad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //nos devuelve la vista para almacenar informacion
    public function create($id)
    {
        //$aprendiz almacena una array de los aprendices donde el id sea igual al que seleccionamos 
        $aprendiz = DB::select('select * from aprendices where id = ?',[$id]);
        //$data2 almacena la informacion para mostrarla en la vista 
        $data2 = array('lista_aprendices' => $aprendiz);
        //nos devuelve la vista create en la carpeta novedad
        return view('novedad.create', $data2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //funcion store almacena la informacion enla base de datos 
    public function store(Request $request)
    {
        //verificamos que la informacion que deseamos sea requerida
        $request->validate([
            'tipo_novedad' => 'required',
            'descripcion_P' => 'required',
            'fecha_Info' => 'required',
            'desayuno' => 'required',
            'almuerzo' => 'required',
            'cena' => 'required',
        ]);

        //accedemos a la base de datos a la tabla novedad y a la funcion insertar para almacenar la informacion
        DB::table('novedades')->insert([
            'tipo_novedad' => $request->tipo_novedad,
            'descripcion_P' => $request->descripcion_P,
            'fecha_Info' => $request->fecha_Info,
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena,
            'aprendiz' => $request->aprendiz,
        ]);
        //nos redirige a la ruta que asignemos
        return redirect()->route('index.novedad')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Novedade  $novedade
     * @return \Illuminate\Http\Response
     */
    public function show(Novedade $novedade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Novedade  $novedade
     * @return \Illuminate\Http\Response
     */
    //funcion edit devulve la vista para editar la informacion
    public function edit(Novedade $novedade)
    {
        //nos devuelve la vista edit de la carpeta novedad
        return view('novedad.edit', compact('novedade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Novedade  $novedade
     * @return \Illuminate\Http\Response
     */
    //funcion update se actualiza la informacion
    public function update(Request $request, Novedade $novedade)
    {
        //verificamos que la informacion que deseamos sea requerida
        $request->validate([
            'tipo_novedad' => 'required',
            'descripcion_P' => 'required',
            'fecha_Info' => 'required',
            'desayuno' => 'required',
            'almuerzo' => 'required',
            'cena' => 'required',
        ]);
        
        //accedemos a la base de datos y funcion actualizar para actualizar la informacion
        $novedade->update([
            'tipo_novedad' => $request->tipo_novedad,
            'descripcion_P' => $request->descripcion_P,
            'fecha_Info' => $request->fecha_Info,
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena,
        ]);
        //nos redirige a la ruta que asignemos
        return redirect()->route('index.novedad')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Novedade  $novedade
     * @return \Illuminate\Http\Response
     */
    //funcion destroy elimina la informacion
    public function destroy(Novedade $novedade)
    {
        //accede a la base de datos y funcion eliminar para eliminar la informacion
        $novedade->delete();
        //nos redirige a la ruta que le asignemos 
        return redirect()->back()->with('eliminar','ok');
    }
}
