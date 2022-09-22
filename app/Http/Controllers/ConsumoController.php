<?php

namespace App\Http\Controllers;

use App\Models\Consumo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //la varable $consumos almacena un array con la informacion de la tabla consumos y por medio del inner join
        //accedesmos tambien a la tabla aprendices 
        $consumo = DB::select('select consumos.*,aprendices.nombre,aprendices.apellido from consumos 
        inner join aprendices on aprendices.id = consumos.aprendiz_consumos where aprendiz_consumos = ?', [$id]);

        //return view nos devuelve la vista del index y el compac nos pasa el array que defininimos anterior mente
        return view('consumos.index', compact('consumo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function show(Consumo $consumo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */

    //funcion edit vista para editar la infomacion
    public function edit(Consumo $consumo)
    {
        //nos deveulve una vista que esta en la capreta consumos y compac le pasamos el id de la llave principal
        //de la tabla consumos
        return view('consumos.edit', compact('consumo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */

    //funcion update nos actualiza la informacion de la base de datos
    public function update(Request $request, Consumo $consumo)
    {
        //Realiza la misma funcion que se explico en AprendicesController linea 100 y 101
        $consumo->update([
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena
        ]);

        //return redirect route le indicamos que nos rediriga a una ruta en expecifico
        //with es la funcion para activar la validacion o notificacion del sweetAlert2
        return redirect()->route('index.ficha')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consumo  $consumo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consumo $consumo)
    {
        //
    }
}
