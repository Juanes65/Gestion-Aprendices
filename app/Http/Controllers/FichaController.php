<?php

namespace App\Http\Controllers;

use App\Imports\AprendicesImport;
use App\Models\Aprendice;
use App\Models\Ficha;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class FichaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion index accede a la vista index
    public function index()
    {
        //$ficha almacena toda la informacion de la tabla fichas
        $ficha = Ficha::all();
        //nos devuelve la vista index de la carpeta fichas junto con la informacion de la variable $ficha
        return view('fichas.index', compact('ficha'));
    }

    //funcion filtro me muestra una nueva vista con un filtro de busqueda que se toma del riquest de la vista index
    public function filtro(Request $request)
    {
        //realizamos la consulta y la almacenamos en la variable
        $ficha = Ficha::where('fecha_i','>=',$request->start_date)->where('fecha_s','<=',$request->end_date)->get();
        //Devolvemos la cista con nueva pero con el filtro del rango de fechas que deseamos
        return view('fichas.filtro', compact('ficha'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion create nos devuelve la vista de crear fichas
    public function create()
    {
        //nos devuelve la vista de create en la carpeta de fichas
        return view('fichas.create');
    }

    //funcion create2 nos devuelve la vista de crear aprendices
    public function create2($id)
    {
        //nos devuelve la vista de create en la carpeta de aprendices
        return view('aprendiz.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //funcion store almacena la informacion de la tabla fichas
    public function store(Request $request)
    {
        //verificamos que la informacion que deseamos se requerida
        $request->validate([
            'ficha' => 'required',
            'origen' => 'required',
            'tutor' => 'required',
            'carrera' => 'required',
            'hora_e' => 'required',
            'hora_s' => 'required',
            'fecha_i' => 'required',
            'fecha_s' => 'required',
        ]);
        //$ficha accedemos a los atributos de la tabla fichas
        $ficha = new Ficha();
        //$fichas se almacenan los datos que se traen del formulario en la vista create
        $ficha->ficha = $request->ficha;
        $ficha->origen = $request->origen;
        $ficha->tutor = $request->tutor;
        $ficha->carrera = $request->carrera;
        $ficha->estudiante_m = $request->estudiante_m;
        $ficha->estudiante_h = $request->estudiante_h;
        $ficha->hora_e = $request->hora_e;
        $ficha->hora_s = $request->hora_s;
        $ficha->fecha_i = $request->fecha_i;
        $ficha->fecha_s = $request->fecha_s;
        //$fichas con los datos almacenos accedemos a la funcion guardar para al macenarlos en la base de datos
        $ficha->save();
        //nos redirige a la vista que le asignemos
        return redirect()->route('index.ficha')->with('crear','ok');
    }

    //almacena la informacion en la tabla aprendices
    public function store2(Request $request)
    {
        //$file almacena el archivo que se pasa por medio del formulario
        $file = $request->file('import');
        //accedmos al import aprendicesImport para almacenar los datos en la tabla aprendices
        Excel::import(new AprendicesImport, $file);
        //nos redirige a la vista que le asignemos
        return redirect()->route('index.ficha')->with('crear','ok');
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
    //funcion edit nos devuelve la vista para editar la informacion
    public function edit(Ficha $ficha)
    {
        //nos devuelve la vista edit de la carpeta fichas junto con el id
        return view('fichas.edit', compact('ficha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    //funcion update actualiza la informacion de la tabla fichas
    public function update(Request $request, $id)
    {
        //$fichas nos devuelve el id
        $ficha = Ficha::find($id);
        //verificamos que la informacion que deseamos sea requerida
        $request->validate([
            'ficha' => 'required',
            'origen' => 'required',
            'tutor' => 'required',
            'carrera' => 'required',
            'hora_e' => 'required',
            'hora_s' => 'required',
            'fecha_i' => 'required',
            'fecha_s' => 'required',
        ]);
        //cuenta cuantos aprendices masculinos hay en una ficha
        $contador_h = Aprendice::where('genero','Masculino')
                                ->where('aprendiz_ficha',[$id])->count();
        //cuenta cuantos aprendices femeninos hay en una ficha
        $contador_m = Aprendice::where('genero','Femenino')
                                ->where('aprendiz_ficha',[$id])->count();

        //$ficha accede a la tabla fichas y la funcion update actualiza la informacion de dicha tabla
        $dato = $ficha->update([
            'ficha' => $request->ficha,
            'origen' => $request->origen,
            'tutor' => $request->tutor,
            'carrera' => $request->carrera,
            'estudiante_m' => $contador_m,
            'estudiante_h' => $contador_h,
            'hora_e' => $request->hora_e,
            'hora_s' => $request->hora_s,
            'fecha_i' => $request->fecha_i,
            'fecha_s' => $request->fecha_s,
        ]);
        //nos redirige a la vista que le asignemos
        return redirect()->route('index.ficha')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ficha  $ficha
     * @return \Illuminate\Http\Response
     */
    //funcion destros elimina la infomacion
    public function destroy(Ficha $ficha)
    {
        //accede la tabla de fichas y la funcion delete elimina la informacion seleccionada
        $ficha->delete();
        //nos redirige a la ruta que le asignemos
        return redirect()->back();
    }
}
