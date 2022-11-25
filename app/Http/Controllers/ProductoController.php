<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Area;
use App\Models\Bodega;
use App\Models\Provedore;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ($id)
    {
        $producto = DB::select('select productos.*, areas.nombre_area, bodegas.nombre_bodega from productos
                            inner join areas on productos.area = areas.id inner join bodegas on areas.bodega = bodegas.id where productos.area = ?', [$id]);

        return view('producto.index', compact('producto'));
    }

    public function minimo()
    {
        $producto = DB::select('select id, nombre_producto, stock_actual, stock_minimo from productos');

        return view('producto.minimo', compact('producto'));
    }

    public function todo ()
    {
        $producto = Producto::all();

        return view('producto.todo', compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $area = DB::select('select * from areas where id = ?', [$id]);
        $provedor = Provedore::all();

        $data = array('lista_areas' => $area);
        $data2 = array('lista_provedores' => $provedor);

        return view('producto.create', $data, $data2 );
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
            'provedor' => 'required',
            'etiqueta' => 'required',
            'hora' => 'required',
            'nombre_producto' => 'required',
            'unidad_medida' => 'required',
            'fecha_caducidad' => 'required',
            'marca_producto' => 'required',
            'clasificacion_producto' => 'required',
            'stock_actual' => 'required',
            'stock_minimo' => 'required',
            'lote_producto' => 'required',
            'fecha_llegada' => 'required',
            'area' => 'required',
        ]);

        $request->all();

        $product = DB::select('select * from productos where nombre_producto = ?', [$request->nombre_producto]);

        foreach($product as $producto){
            $nombre_producto = $producto->nombre_producto;
            $stock_actual = $producto->stock_actual;
            $id = $producto->id;
        };

        if($product == null){
            DB::table('productos')->insert([
                'provedor' => $request->provedor,
                'etiqueta' => $request->etiqueta,
                'hora' => $request->hora,
                'nombre_producto' => $request->nombre_producto,
                'unidad_medida' => $request->unidad_medida,
                'fecha_caducidad' => $request->fecha_caducidad,
                'marca_producto' => $request->marca_producto,
                'clasificacion_producto' => $request->clasificacion_producto,
                'stock_actual' => $request->stock_actual,
                'stock_minimo' => $request->stock_minimo,
                'lote_producto' => $request->lote_producto,
                'fecha_llegada' => $request->fecha_llegada,
                'area' => $request->area,
            ]);
        }else{
            $suma = $stock_actual + $request->stock_actual;

            $productos = Producto::find($id);

            $productos->update([
                'stock_actual' => $suma,
            ]);
        }

        return redirect()->back()->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        $productos = Area::all();
        $provedor = Provedore::all();

        $data2 = array('lista_provedores' => $provedor);
        $data = array('lista_areas' => $productos);

        return view('producto.edit', compact('producto'), $data,$data2);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'etiqueta' => 'required',
            'hora' => 'required',
            'nombre_producto' => 'required',
            'unidad_medida' => 'required',
            'fecha_caducidad' => 'required',
            'marca_producto' => 'required',
            'clasificacion_producto' => 'required',
            'stock_actual' => 'required',
            'stock_minimo' => 'required',
            'lote_producto' => 'required',
            'fecha_llegada' => 'required',
            'area' => 'required',
        ]);

        $producto->update([
            'etiqueta' => $request->etiqueta,
            'hora' => $request->hora,
            'nombre_producto' => $request->nombre_producto,
            'unidad_medida' => $request->unidad_medida,
            'fecha_caducidad' => $request->fecha_caducidad,
            'marca_producto' => $request->marca_producto,
            'clasificacion_producto' => $request->clasificacion_producto,
            'stock_actual' => $request->stock_actual,
            'stock_minimo' => $request->stock_minimo,
            'lote_producto' => $request->lote_producto,
            'fecha_llegada' => $request->fecha_llegada,
        ]);

        return redirect()->route('index.bodega')->with('actualizar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->back()->with('elminar', 'ok');
    }
}
