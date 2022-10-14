<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprendiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //La funcion index nos devuelve la vista con la informacion que estamos solicitando
    public function index($id)
    {
        //la variable aprendiz nos almacena un array donde la llave foranea sea igual a id de la tabla fichas

        $aprendiz = DB::select('select * from aprendices where aprendiz_ficha = ?', [$id]);

        //la variable ficha nos devuelve tada la informacion de la tabla fichas 

        $ficha = DB::select('select * from fichas where id = ?', [$id]);

        return view('aprendiz.index', compact('aprendiz', 'ficha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aprendice  $aprendice
     * @return \Illuminate\Http\Response
     */
    public function show(Aprendice $aprendice)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aprendice  $aprendice
     * @return \Illuminate\Http\Response
     */

    //La funcion edit nos devuelve la vista para editar con el compact le pasamos el id de la llave principal de la tabla aprendices
    public function edit(Aprendice $aprendice)
    {
        return view('aprendiz.edit', compact('aprendice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aprendice  $aprendice
     * @return \Illuminate\Http\Response
     */

     //La funcion update nos actualiza la informacion en la base de datos
    public function update(Request $request, Aprendice $aprendice)
    {
        //validate nos permite realizar las validaciones que nostros le asignemos 
        //como por ejemplo cuantos caracteres debe ser un campo o si el campo debe ser reuqerido
        $request->validate([
            'cc' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'estado' => 'required',
            'observaciones' => 'required',
            'fecha_inicial' => 'required',
            'fecha_final' => 'required',
        ]);
        //la variable aprendices->update accede al id de la tabla aprebndices y accede a la funcion actualizar
        //despues ponemos los nombres que tenemos en la tabla donde se almacenara la informacion que le pasamos por medio del formulario ($request)
        $aprendice->update([
            'cc' => $request->cc,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'observaciones' => $request->observaciones,
            'estado' => $request->estado,
            'fecha_inicial' => $request->fecha_inicial,
            'fecha_final' => $request->fecha_final,
        ]);

        return redirect()->route('index.ficha')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aprendice  $aprendice
     * @return \Illuminate\Http\Response
     */
    //La funcion destroy es la funcion para eliminar la informacion en la base de datos
    public function destroy(Aprendice $aprendice)
    {
        //variable $aprendices->delete accede al id seleccionado en el index y accedera a la funcion eliminar
        $aprendice->delete();

        return redirect()->back()->with('eliminar','ok');
    }
}
