<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AprendiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $aprendiz = DB::select('select * from aprendices where aprendiz_ficha = ?', [$id]);

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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aprendice  $aprendice
     * @return \Illuminate\Http\Response
     */
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
    public function update(Request $request, Aprendice $aprendice)
    {
        $aprendice->update([
            'cc' => $request->cc,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'edad' => $request->edad,
            'genero' => $request->genero,
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena,
            'observaciones' => $request->observaciones,
            'fecha_ingreso' => $request->fecha_ingreso,
            'fecha_salida' => $request->fecha_salida,
        ]);

        return redirect()->route('index.ficha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aprendice  $aprendice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aprendice $aprendice)
    {
        $aprendice->delete();

        return redirect()->back();
    }
}
