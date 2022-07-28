<?php

namespace App\Http\Controllers;

use App\Models\Aprendice;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function create2($id)
    {
        $nose = DB::select('select * from fichas where id = ?', [$id]);
        $data = array('lista_fichas' => $nose);

        return view('aprendiz.create', $data);
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

    public function store2(Request $request)
    {
        $request->validate([
            'cc' => 'unique:aprendices',
            'nombre' => 'required',
        ]);

        DB::table('aprendices')->insert([
            'cc' => $request->cc,
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'edad' => $request->edad,
            'genero' => $request->genero,
            'desayuno' => $request->desayuno,
            'almuerzo' => $request->almuerzo,
            'cena' => $request->cena,
            'observaciones' => $request->observaciones,
            'fecha_ingreso' => $request->fecha_ingreso,
            'fecha_salida' => $request->fecha_salida,
            'aprendiz_ficha' => $request->aprendiz_ficha,
        ]);

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
        return view('fichas.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ficha = Ficha::find($id);

        $request->validate([
            'ficha' => 'required',
            'origen' => 'required',
            'tutor' => 'required',
            'carrera' => 'required',
            'fecha_i' => 'required',
            'fecha_s' => 'required',
        ]);

        $contador_h = Aprendice::where('genero','Masculino')
                                ->where('aprendiz_ficha',[$id])->count();
        $contador_m = Aprendice::where('genero','Femenino')
                                ->where('aprendiz_ficha',[$id])->count();

        $dato = $ficha->update([
            'ficha' => $request->ficha,
            'origen' => $request->origen,
            'tutor' => $request->tutor,
            'carrera' => $request->carrera,
            'estudiante_m' => $contador_m,
            'estudiante_h' => $contador_h,
            'fecha_i' => $request->fecha_i,
            'fecha_s' => $request->fecha_s,
        ]);

        return redirect()->route('index.ficha');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ficha $ficha)
    {
        $ficha->delete();

        return redirect()->back();
    }
}
