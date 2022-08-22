<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Consumo;
use App\Models\Ficha;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurante = Restaurante::all();
        
        return view('restaurante.index', compact('restaurante'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fichas = Ficha::all();
        $data = array('lista_fichas' => $fichas);
        return view('restaurante.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inpu = $request->all();

        $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.desayuno','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.almuerzo','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        $cena    = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.cena','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        DB::table('restaurantes')->insert([
            'total_desayunos'=> $desayuno, 
            'total_almuerzos'=>$almuerzo,
            'total_cenas'=>$cena,
            'ficha_restaurante'=>$request->ficha_restaurante,
        ]);

        return redirect()->route('index.cocina');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurante $restaurante)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function edit(Restaurante $restaurante)
    {
        $fichas = Ficha::all();
        $data = array('lista_fichas' => $fichas);

        return view('restaurante.edit', compact('restaurante'), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurante $restaurante)
    {
        $inpu = $request->all();

        $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.desayuno','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.almuerzo','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        $cena    = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.cena','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        $restaurante->update([
            'total_desayunos'=> $desayuno, 
            'total_almuerzos'=>$almuerzo,
            'total_cenas'=>$cena,
            'ficha_restaurante'=>$request->ficha_restaurante,
        ]);

        return redirect()->route('index.cocina');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurante $restaurante)
    {
        $restaurante->delete();

        return redirect()->back();
    }
}
