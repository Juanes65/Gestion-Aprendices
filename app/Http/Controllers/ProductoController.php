<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Area;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ( $id )
    {
        $producto = DB::select('select productos.*, areas.nombre_area from productos
                            inner join areas on productos.area = areas.id where productos.area = ?', [$id]);

        return view('producto.index', compact('producto'));
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

        $data = array('lista_areas' => $area);

        return view('producto.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('productos')->insert([
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

        return redirect()->route('index.bodega');
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

        $data = array('lista_areas' => $productos);

        return view('producto.edit', compact('producto'), $data);
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
        $producto->update([
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
