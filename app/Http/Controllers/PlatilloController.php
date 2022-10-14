<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatilloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillo = Platillo::all();

        return view('platillos.index', compact('platillo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platillos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('Platillos')->insert([
            'nombre_platillo' => $request->nombre_platillo,
            'ingre_1' => $request->ingre_1,
            'ingre_2' => $request->ingre_2,
            'ingre_3' => $request->ingre_3,
            'ingre_4' => $request->ingre_4,
            'ingre_5' => $request->ingre_5,

        ]);

        return redirect()->route('index.platillo')->with('agregar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo $platillo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo $platillo)
    {

        return view('platillos.edit', compact('platillo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo $platillo)
    {
        $platillo->update([
            'nombre_platillo' => $request->nombre_platillo,
            'ingre_1' => $request->ingre_1,
            'ingre_2' => $request->ingre_2,
            'ingre_3' => $request->ingre_3,
            'ingre_4' => $request->ingre_4,
            'ingre_5' => $request->ingre_5,
        ]);

        return redirect()->route('index.platillo')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platillo  $platillo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo $platillo)
    {
        $platillo->delete();

        return redirect()->back()->with('elminar', 'ok');
    }
}
