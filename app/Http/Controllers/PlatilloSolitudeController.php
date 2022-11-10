<?php

namespace App\Http\Controllers;

use App\Models\Platillo;
use App\Models\Solicitude;
use App\Models\Platillo_Solitude;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlatilloSolitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$fichas nos almecena por medio de un array todo la informacion de los Platillos de la base de datos
        $platillo = Platillo::all();
        $solicitud = Solicitude::all();
        //$data se almacena el array para mostrarlo en la vista
        $data = array('solicitudes' =>$solicitud);
        $data2 = array('platillos' => $platillo);

        return view('platillo_solicitud.create', $data, $data2);
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

        $var = DB::select('select * from platillos where id = ?', [$request->platillo]);

        foreach($var as $ver){
            $cantidad_1 = $ver->cantidad_1;
            $cantidad_2 = $ver->cantidad_2;
            $cantidad_3 = $ver->cantidad_3;
            $cantidad_4 = $ver->cantidad_4;
            $cantidad_5 = $ver->cantidad_5;
        };

        $var2 = DB::select('select * from solicitudes where id = ?', [$request->solicitud]);

        foreach($var2 as $ver2){
            $cantidad_desayuno = $ver2->cantidad_desayuno;
        };

        $multi = $cantidad_desayuno * $cantidad_1;
        $multi2 = $cantidad_desayuno * $cantidad_2;
        $multi3 = $cantidad_desayuno * $cantidad_3;
        $multi4 = $cantidad_desayuno * $cantidad_4;
        $multi5 = $cantidad_desayuno * $cantidad_5;

        DB::table('platillo_solitudes')->insert([
            'platillo' => $request->platillo,
            'solicitud' => $request->solicitud,
            'total' => $multi,
            'total2' => $multi2,
            'total3' => $multi3,
            'total4' => $multi4,
            'total5' => $multi5,
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Platillo_Solitude  $platillo_Solitude
     * @return \Illuminate\Http\Response
     */
    public function show(Platillo_Solitude $platillo_Solitude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Platillo_Solitude  $platillo_Solitude
     * @return \Illuminate\Http\Response
     */
    public function edit(Platillo_Solitude $platillo_Solitude)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Platillo_Solitude  $platillo_Solitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Platillo_Solitude $platillo_Solitude)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Platillo_Solitude  $platillo_Solitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(Platillo_Solitude $platillo_Solitude)
    {
        //
    }
}
