<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Bodega;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $area = DB::select('select areas.*, bodegas.nombre_bodega from areas
                            inner join bodegas on areas.bodega = bodegas.id where areas.bodega = ?', [$id]);

        return view('area.index', compact('area'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bodega = Bodega::all();

        $data = array('lista_bodegas' => $bodega);

        return view('area.create', $data);
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
            'nombre_area' => 'required',
            'codigo' => 'required',
            'bodega' => 'required',
        ]);

        DB::table('areas')->insert([
            'nombre_area' => $request->nombre_area,
            'codigo' => $request->codigo,
            'bodega' => $request->bodega,
        ]);

        return redirect()->route('index.bodega')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function edit(Area $area)
    {
        $bodega = Bodega::all();

        $data = array('lista_bodegas' => $bodega);

        return view('area.edit', compact('area'), $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'nombre_area' => 'required',
            'codigo' => 'required',
            'bodega' => 'required',
        ]);

        $area->update([
            'nombre_area' => $request->nombre_area,
            'codigo' => $request->codigo,
            'bodega' => $request->bodega,
        ]);

        return redirect()->route('index.bodega')->whit('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()->back()->with('elminar', 'ok');
    }
}
