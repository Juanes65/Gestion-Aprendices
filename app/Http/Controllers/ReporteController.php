<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use SebastianBergmann\CodeCoverage\Report\Xml\Report;

class ReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporte=Reporte::all();

        return view('restaurante.index', compact('reporte'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('restaurante.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $desayuno= Aprendice::where('desayuno','si')->count();
        $almuerzo= Aprendice::where('almuerzo','si')->count();
        $cena    = Aprendice::where('cena','si')->count();

        DB::table('reportes')->insert([
            'desayuno'=> $desayuno, 
            'almuerzo'=>$almuerzo,
            'cena'=>$cena,
            'fecha'=>$request->fecha,
        ]);

        return redirect()->route('index.cocina');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function show(Reporte $reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(Reporte $reporte)
    {
        return view('restaurante.edit', compact('reporte'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reporte $reporte)
    {
        $desayuno= Aprendice::where('desayuno','si')->count();
        $almuerzo= Aprendice::where('almuerzo','si')->count();
        $cena    = Aprendice::where('cena','si')->count();

        $reporte->update([

            'desayuno'=> $desayuno, 
            'almuerzo'=>$almuerzo,
            'cena'=>$cena,
            'fecha'=>$request->fecha,

        ]);

        return redirect()->route('index.cocina');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {
        $reporte->delete();

        return redirect()->back();
    }
}
