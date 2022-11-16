<?php

namespace App\Http\Controllers;

use App\Models\Bodega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bodega = Bodega::all();

        return view('bodega.index', compact('bodega'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodega.create');
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
            'nombre_bodega' => 'required',
            'descripcion_bodega' => 'required',
            'direccion_bodega' => 'required',
        ]);

        DB::table('Bodegas')->insert([
            'nombre_bodega' => $request->nombre_bodega,
            'descripcion_bodega' => $request->descripcion_bodega,
            'direccion_bodega' => $request->direccion_bodega,
        ]);

        return redirect()->route('index.bodega')->with('crear', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function show(Bodega $bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(Bodega $bodega)
    {
        return view('bodega.edit', compact('bodega'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bodega $bodega)
    {
        $request->validate([
            'nombre_bodega' => 'required',
            'descripcion_bodega' => 'required',
            'direccion_bodega' => 'required',
        ]);
        
        $bodega->update([
            'nombre_bodega' => $request->nombre_bodega,
            'descripcion_bodega' => $request->descripcion_bodega,
            'direccion_bodega' => $request->direccion_bodega,
        ]);

        return redirect()->route('index.bodega')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bodega  $bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bodega $bodega)
    {
        $bodega->delete();

        return redirect()->back()->with('elminar', 'ok');
    }
}
