<?php

namespace App\Http\Controllers;

use App\Models\Ficha;
use App\Models\Restaurante;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;


class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion index devuelve la vista index
    public function index()
    {  
        //$restaurante se almacena un array de la informacion en la base de datos de la tabla restaurante 
        $restaurante = Restaurante::all();
        //nos devuelve la vista index de la carpeta restaurante
        return view('restaurante.index', compact('restaurante'));
    }

    public function paginafiltro()
    {
        return view('restaurante.opciones');
    }
 
    public function filtro(Request $request)
    {
        $request->validate([
            'comida' => 'required',
            'date' => 'required',
        ]);

        //Concatenamos la palabra consumos con lo que nostraiga el formularion para poder realizar la condicional
        $info = 'consumos.'.$request->comida;
        //realizamos la consulta y la almacenamos en la variable 
        $restaurante = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                            ->select('consumos.fecha','aprendices.nombre','aprendices.apellido','consumos.desayuno')
                            ->where($info,'=','Si')->where('consumos.fecha','=',$request->date)->get();
        //Devolvemos la cista con nueva pero con el filtro del los aprendices que fueron al restaurante
        return view('restaurante.filtro', compact('restaurante'));
    }

    public function paginafiltroDoc()
    {
        return view('restaurante.opcionesDoc');
    }

    public function filtroDoc(Request $request)
    {
        $request->validate([
            'cc' => 'required',
            'date' => 'required',
        ]);
        
        //realizamos la consulta y la almacenamos en la variable 
        $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                    ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
                    ->select('consumos.desayunos')->where('consumos.desayuno','Si')
                    ->where('aprendices.cc',$request->cc)
                    ->where('fecha','<=',$request->date)->count();
        $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                    ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
                    ->select('consumos.desayunos')->where('consumos.almuerzo','Si')
                    ->where('aprendices.cc',$request->cc)
                    ->where('fecha','<=',$request->date)->count();
        $cena = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                    ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
                    ->select('consumos.desayunos')->where('consumos.cena','Si')
                    ->where('aprendices.cc',$request->cc)
                    ->where('fecha','<=',$request->date)->count();
        
        $restaurante = DB::table('aprendices')->select('*')->where('aprendices.cc','=',$request->cc)->get();

        foreach($restaurante as $ver){
            $cc = $ver->cc;
            $nombre = $ver->nombre;
            $apellido = $ver->apellido;
        };

        $datos = Arr::sort([$desayuno,$almuerzo,$cena,$cc,$nombre,$apellido]);
        
        //Devolvemos la cista con nueva pero con el filtro del los aprendices que fueron al restaurante
        return view('restaurante.filtroDoc', compact('desayuno','almuerzo','cena','cc','nombre','apellido'));  
    }

    // public function filtroPDF(Request $request)
    // {
    //     $request->validate([
    //         'cc' => 'required',
    //         'date' => 'required',
    //     ]);
        
    //     //realizamos la consulta y la almacenamos en la variable 
    //     $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
    //                 ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
    //                 ->select('consumos.desayunos')->where('consumos.desayuno','Si')
    //                 ->where('aprendices.cc',$request->cc)
    //                 ->where('fecha','<=',$request->date)->count();
    //     $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
    //                 ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
    //                 ->select('consumos.desayunos')->where('consumos.almuerzo','Si')
    //                 ->where('aprendices.cc',$request->cc)
    //                 ->where('fecha','<=',$request->date)->count();
    //     $cena = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
    //                 ->join('fichas','fichas.id','=','aprendices.aprendiz_ficha')
    //                 ->select('consumos.desayunos')->where('consumos.cena','Si')
    //                 ->where('aprendices.cc',$request->cc)
    //                 ->where('fecha','<=',$request->date)->count();
        
    //     $restaurante = DB::table('aprendices')->select('*')->where('aprendices.cc','=',$request->cc)->get();

    //     foreach($restaurante as $ver){
    //         $cc = $ver->cc;
    //         $nombre = $ver->nombre;
    //         $apellido = $ver->apellido;
    //     };

    //     $datos = Arr::sort([$desayuno,$almuerzo,$cena,$cc,$nombre,$apellido]);

    //     view()->share('restaurante.dowload',$datos);

    //     $pdf = PDF::loadView('restaurante.dowload', ['datos' => $datos]);

    //     return $pdf->download('Reporte Del Restaurante Con El Aprendiz.pdf');
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //funcion create vista para almacenar la informacion en la tabla restaurante
    public function create()
    {   
        //$fichas nos almecena por medio de un array todo la informacion de las fichas de la base de datos
        $fichas = Ficha::all();
        //$data se almacena el array para mostrarlo en la vista
        $data = array('lista_fichas' => $fichas);
        //nos devuelve la vista create de la carpeta restaurante
        return view('restaurante.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //funcion store almacena la informacion en la base de datos
    public function store(Request $request)
    {
        //obtenemos por medio del formulario a que ficha que remos sacar informacion
        $inpu = $request->all();

        //$desayuno almacena la suma de los aprendices que van a desayunar durante el periodo de estancia
        $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.desayuno','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();
        //$almuerzo almacena la suma de los aprendices que van a almuerzan durante el periodo de estancia
        $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.almuerzo','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();
        //$cena almacena la suma de los aprendices que van a cenar durante el periodo de estancia
        $cena    = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.cena','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();

        //accede a la base de datos a la tabla restaurantes y almacena los diferentes resultados de las variables
        DB::table('restaurantes')->insert([
            'total_desayunos'=> $desayuno, 
            'total_almuerzos'=>$almuerzo,
            'total_cenas'=>$cena,
            'ficha_restaurante'=>$request->ficha_restaurante,
        ]);
        //nos redirige a la ruta que le asignemos
        return redirect()->route('index.cocina')->with('crear','ok');
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
    //funcion edit nos manda la vista para editar la informacion
    public function edit(Restaurante $restaurante)
    {
        //$fichas nos almecena por medio de un array todo la informacion de las fichas de la base de datos
        $fichas = Ficha::all();
        //$data se almacena el array para mostrarlo en la vista
        $data = array('lista_fichas' => $fichas);
        //nos devuelve la vista edit de la carpeta restaurante
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
        //obtenemos por medio del formulario a que ficha que remos sacar informacion
        $inpu = $request->all();

        //$desayuno almacena la suma de los aprendices que van a desayunar durante el periodo de estancia
        $desayuno = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.desayuno','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();
        //$almuerzo almacena la suma de los aprendices que van a almuerzan durante el periodo de estancia
        $almuerzo = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.almuerzo','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();
        //$cena almacena la suma de los aprendices que van a cenar durante el periodo de estancia
        $cena    = DB::table('consumos')->join('aprendices','aprendices.id','=','consumos.aprendiz_consumos')
                        ->select('consumos.desayuno, consumos.almuerzo, consumos.cena, fecha')
                        ->where('consumos.cena','Si')->where('aprendiz_ficha',[$inpu['ficha_restaurante']])->count();
        //accede a la base de datos a la tabla restaurantes y actualiza la informacion en los diferentes resultados de las variables
        $restaurante->update([
            'total_desayunos'=> $desayuno, 
            'total_almuerzos'=>$almuerzo,
            'total_cenas'=>$cena,
            'ficha_restaurante'=>$request->ficha_restaurante,
        ]);
        //nos redirege a la ruta que le asignemos
        return redirect()->route('index.cocina')->with('actualizar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restaurante  $restaurante
     * @return \Illuminate\Http\Response
     */
    //funcion destroy elimina la informacion de la base de datos
    public function destroy(Restaurante $restaurante)
    {
        //accede a la base de datos y elimina la informacion
        $restaurante->delete();
        //nos redirige a la ruta que le asignemos
        return redirect()->back()->with('eliminar','ok');
    }
}
