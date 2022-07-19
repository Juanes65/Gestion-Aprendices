<?php

namespace App\Http\Controllers;

use App\Models\Dormitorio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DormitorioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dormitorio=DB::table('dormitorios')
        ->select('nombre_dor','camas','ubicacion','genero','id','estado')
        ->orderBy('camas', 'desc')
        ->paginate(5);

        return view('dormitorios.index', compact('dormitorio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dormitorios.create');
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
            'nombre_dor' => 'required',
            'camas' => 'required',
            'ubicacion' => 'required',
            'genero' => 'required',
        ]);
        
        Dormitorio::create($request->only('nombre_dor', 'camas', 'ubicacion', 'genero','estado'));

        return redirect()->route('index.dormitorio');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    public function show(Dormitorio $dormitorio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    public function edit(Dormitorio $dormitorio)
    {
        return view('dormitorios.edit', compact('dormitorio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dormitorio $dormitorio)
    {
        $request->validate([
            'nombre_dor' => 'required',
            'camas' => 'required',
            'ubicacion' => 'required',
            'genero' => 'required',
        ]);

        $dato = $request->only('nombre_dor','camas','ubicacion','genero','estado');

        $dormitorio->update($dato);

        return redirect()->route('index.dormitorio');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dormitorio  $dormitorio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dormitorio $dormitorio)
    {
        $dormitorio->delete();

        return redirect()->back();
    }
}
