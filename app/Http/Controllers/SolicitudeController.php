<?php

namespace App\Http\Controllers;

use App\Models\Solicitude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitud = Solicitude::all();

        return view('solicitud.index', compact('solicitud'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitud.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desayuno = DB::table('consumos')->select('desayuno')->where('desayuno','Si')->where('fecha','=',$request->date)->count();

        $almuerzo = DB::table('consumos')->select('almuerzo')->where('almuerzo','Si')->where('fecha','=',$request->date)->count();

        $cena = DB::table('consumos')->select('cena')->where('cena','Si')->where('fecha','=',$request->date)->count();

        $fecha = date("Y-m-d");

        DB::table('Solicitudes')->insert([
            'cantidad_desayuno' => $desayuno,
            'cantidad_almuerzo' => $almuerzo,
            'cantidad_cena' => $cena,
            'fecha_registro' =>$fecha,
        ]);

        return redirect()->route('index.solicitud')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitude $solicitude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitude $solicitude)
    {
        return view('solicitud.edit', compact('solicitude'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitude $solicitude)
    {
        $desayuno = DB::table('consumos')->select('desayuno')->where('desayuno','Si')->where('fecha','=',$request->date)->count();

        $almuerzo = DB::table('consumos')->select('almuerzo')->where('almuerzo','Si')->where('fecha','=',$request->date)->count();

        $cena = DB::table('consumos')->select('cena')->where('cena','Si')->where('fecha','=',$request->date)->count();

        $solicitude->update([
            'cantidad_desayuno' => $desayuno,
            'cantidad_almuerzo' => $almuerzo,
            'cantidad_cena' => $cena,
            'fecha_registro' =>$request->fecha_registro,
        ]);

        return redirect()->route('index.solicitud')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitude  $solicitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitude $solicitude)
    {
        $solicitude->delete();

        return redirect()->back()->with('eliminar', 'ok');
    }
}
