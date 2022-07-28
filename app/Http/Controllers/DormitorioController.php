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
        ->select('nombre_dor','camas','ubicacion','genero','id','estado','espacio')
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
        
        $input = $request->camas;

        if($input == "0"){
            DB::table('dormitorios')->insert([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Ocupado",
            ]);
        }else{
            DB::table('dormitorios')->insert([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Disponible",
            ]);    
        }

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
    public function validarcapacidad($cama)
    {
        $dormitorio = Dormitorio::select("*")->where('cama',0);

        return $dormitorio == null ? true : false;
    }

    public function update(Request $request, Dormitorio $dormitorio)
    {
        $request->validate([
            'nombre_dor' => 'required',
            'camas' => 'required',
            'ubicacion' => 'required',
            'genero' => 'required',
        ]);

        $input = $request->camas;

        if($input == "0"){
            $dormitorio->update([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Ocupado",
            ]);
        }else{
            $dormitorio->update([
                'nombre_dor' => $request->nombre_dor,
                'camas' => $request->camas,
                'ubicacion' => $request->ubicacion,
                'genero' => $request->genero,
                'espacio' => $request->espacio,
                'estado' => "Disponible",
            ]);    
        }

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
