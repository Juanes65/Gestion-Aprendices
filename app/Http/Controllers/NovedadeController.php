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
    public function index()
    {
        $novedad = Novedade::all();

        return view('novedad.index', compact('novedad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novedad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('novedades')->insert([
            'tipo_novedad' => $request->tipo_novedad,
            'descripcion_P' => $request->descripcion_P,
            'nombre' => $request->nombre,
            'fecha_Info' => $request->fecha_Info,
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena,
        ]);

        return redirect()->route('index.novedad');
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
    public function edit(Novedade $novedade)
    {
        return view('novedad.edit', compact('novedade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Novedade  $novedade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Novedade $novedade)
    {
        $novedade->update([
            'tipo_novedad' => $request->tipo_novedad,
            'descripcion_P' => $request->descripcion_P,
            'nombre' => $request->nombre,
            'fecha_Info' => $request->fecha_Info,
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena,
        ]);

        return redirect()->route('index.novedad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Novedade  $novedade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Novedade $novedade)
    {
        $novedade->delete();

        return redirect()->back();
    }
}
