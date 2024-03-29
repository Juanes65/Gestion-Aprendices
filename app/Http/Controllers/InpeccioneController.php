<?php

namespace App\Http\Controllers;

use App\Models\Inpeccione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InpeccioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reporte=DB::table('inpecciones')
        ->select('nombre','cargo','apellido','area','tipo','descripcion','fecha','id')
        ->orderBy('nombre', 'asc')
        ->paginate(10);
        
        return view('Inspeccion.index', compact('reporte'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Inspeccion.create');
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
            'nombre' => 'required',
            'cargo' => 'required',
            'apellido' => 'required',
            'area' => 'required',
            'tipo' => 'required',
            'descripcion' => 'required',
            'fecha' => 'required',
        ]);

        $arch = $request->file('img')->store('public/images');
        $file = Storage::url($arch);
       

        Inpeccione::create($request->only('nombre','cargo','apellido','area','tipo','descripcion','fecha')+[
            'foto' => $file,
        ]);

        return redirect()->route('index.inspeccion')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inpeccione  $inpeccione
     * @return \Illuminate\Http\Response
     */
    public function show(Inpeccione $inpeccione)
    {

        $reporte=DB::table('inpecciones')
        ->select('descripcion')
        ->orderBy('nombre', 'asc')
        ->paginate(10);

       return view('Inspeccion.descripcion', compact('reporte','inpeccione'));
    }
    public function show2(Inpeccione $inpeccione)
    {

        $reporte=DB::table('inpecciones')
        ->select('foto')
        ->orderBy('nombre', 'asc')
        ->paginate(10);

       return view('Inspeccion.imagen', compact('reporte','inpeccione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inpeccione  $inpeccione
     * @return \Illuminate\Http\Response
     */
    public function edit(Inpeccione $inpeccione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Inpeccione  $inpeccione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inpeccione $inpeccione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inpeccione  $inpeccione
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inpeccione $inpeccione)
    {
        $img = str_replace('storage', 'public', $inpeccione->foto);
        Storage::delete($img);

        $inpeccione->delete();

        return redirect()->back()->with('eliminar','ok');
    }
}
