<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Ficha;
use App\Models\Novedade;
use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
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
        $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                    ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
                    ->select('consumos.desayunos')->where('consumos.desayuno','Si')->where('consumos.fecha','2022-09-01')->count();
        $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                    ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
                    ->select('consumos.desayunos')->where('consumos.almuerzo','Si')->where('consumos.fecha','2022-09-01')->count();
        $cena = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                    ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
                    ->select('consumos.desayunos')->where('consumos.cena','Si')->where('consumos.fecha','2022-09-01')->count();
        $var = DB::table('fichas')->join('aprendices','aprendices.aprendiz_ficha','=','fichas.id')
                                ->join('consumos','consumos.aprendiz_consumos','=','aprendices.id')
                                ->select('fichas.ficha','consumos.fecha')
                                ->where('consumos.fecha','=','2022-09-01')->get();

        foreach($var as $ver){
            $fecha = $ver->fecha;
            $ficha = $ver->ficha;
        };

        $datos = Arr::sort([$desayuno,$almuerzo,$cena,$fecha,$ficha]);


        return view('reportes.index',compact('datos','desayuno','almuerzo','cena','fecha','ficha'));
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reporte  $reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reporte $reporte)
    {

    }
}
