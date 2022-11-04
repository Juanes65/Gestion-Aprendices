<?php

namespace App\Http\Controllers;

use App\Models\Provedore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProvedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provedor = Provedore::all();

        return view('provedor.index', compact('provedor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'empresa' => 'required',
            'nombre_pro' => 'required',
            'cantidad' => 'required',
            'unidad' => 'required',
            'lote' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
        ]);

        DB::table('provedores')->insert([
            'nombre' => $request->nombre,
            'empresa' => $request->empresa,
            'nombre_pro' => $request->nombre_pro,
            'cantidad' => $request->cantidad,
            'unidad' => $request->unidad,
            'lote' => $request->lote,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
        ]);

        return redirect()->route('index.provedor')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Provedore  $provedore
     * @return \Illuminate\Http\Response
     */
    public function show(Provedore $provedore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Provedore  $provedore
     * @return \Illuminate\Http\Response
     */
    public function edit(Provedore $provedore)
    {
        return view('provedor.edit', compact('provedore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Provedore  $provedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Provedore $provedore)
    {
        $request->validate([
            'nombre' => 'required',
            'empresa' => 'required',
            'nombre_pro' => 'required',
            'cantidad' => 'required',
            'unidad' => 'required',
            'lote' => 'required',
            'fecha' => 'required',
            'hora' => 'required',
        ]);
        
        $provedore->update([
            'nombre' => $request->nombre,
            'empresa' => $request->empresa,
            'nombre_pro' => $request->nombre_pro,
            'cantidad' => $request->cantidad,
            'unidad' => $request->unidad,
            'lote' => $request->lote,
            'fecha' => $request->fecha,
            'hora' => $request->hora,
        ]);

        return redirect()->route('index.provedor')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Provedore  $provedore
     * @return \Illuminate\Http\Response
     */
    public function destroy(Provedore $provedore)
    {
        $provedore->delete();

        return redirect()->back()->with('eliminar','ok');
    }
}
