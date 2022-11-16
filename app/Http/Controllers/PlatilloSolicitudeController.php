<?php

namespace App\Http\Controllers;

use App\Models\platilloSolicitude;
use App\Models\CupoDelete;
use App\Models\Platillo;
use App\Models\Solicitude;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PlatilloSolicitudeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platillo = DB::select('select platillo_solicitudes.*,solicitudes.fecha_registro,platillos.nombre_platillo from platillo_solicitudes
        inner join solicitudes on solicitudes.id=platillo_solicitudes.solicitud
        inner join platillos on platillos.id=platillo_solicitudes.platillo');

        return view('platillo_solicitud.index', compact('platillo'));
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

        DB::table('platillo_solicitudes')->insert([
            'platillo' => $request->platillo,
            'solicitud' => $request->solicitud,
            'total' => $multi,
            'total2' => $multi2,
            'total3' => $multi3,
            'total4' => $multi4,
            'total5' => $multi5,
        ]);

        return redirect()->route('index.platillo_s')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\platilloSolicitude  $platilloSolicitude
     * @return \Illuminate\Http\Response
     */
    public function show(platilloSolicitude $platilloSolicitude)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\platilloSolicitude  $platilloSolicitude
     * @return \Illuminate\Http\Response
     */
    public function edit(platilloSolicitude $platilloSolicitude)
    {
        return view('platillo_solicitud.edit', compact('platilloSolicitude'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\platilloSolicitude  $platilloSolicitude
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, platilloSolicitude $platilloSolicitude)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\platilloSolicitude  $platilloSolicitude
     * @return \Illuminate\Http\Response
     */
    public function destroy(platilloSolicitude $platilloSolicitude)
    {
        $platilloSolicitude->delete();

        return redirect()->back()->with('eliminar','ok');
    }
}
