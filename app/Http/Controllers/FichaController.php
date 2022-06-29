<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use Illuminate\Http\Request;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ficha = Ficha::orderBy('id','desc')->paginate(5);
        return view('fichas.index', compact('ficha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fichas.create');
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
            'ficha' => 'required',
            'origen' => 'required',
            'tutor' => 'required',
            'carrera' => 'required',
            'estudiante_m' => 'required',
            'estudiante_h' => 'required',
            'fecha_i' => 'required',
            'fecha_s' => 'required',
        ]);

        $ficha = new Ficha();

        $ficha->ficha = $request->ficha;
        $ficha->origen = $request->origen;
        $ficha->tutor = $request->tutor;
        $ficha->carrera = $request->carrera;
        $ficha->estudiante_m = $request->estudiante_m;
        $ficha->estudiante_h = $request->estudiante_h;
        $ficha->fecha_i = $request->fecha_i;
        $ficha->fecha_s = $request->fecha_s;

        $ficha->save();

        return redirect()->route('index.ficha');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function show(Ficha $ficha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function edit(Ficha $ficha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ficha $ficha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        //
    }
}
