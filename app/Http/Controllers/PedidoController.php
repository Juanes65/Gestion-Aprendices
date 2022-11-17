<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Platillo;
use App\Models\Producto;
use App\Models\Solicitude;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platillo = Platillo::all();
        $solicitud = Solicitude::all();

        $data = array('solicitudes' =>$solicitud);
        $data2 = array('platillos' => $platillo);

        return view('Pedidos.create', $data,$data2);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inpu = $request->all();

        $var = DB::select('select * from platillos where id = ?', [$request->platillo]);

        foreach($var as $ver){
            $cantidad_1 = $ver->cantidad_1;
            $cantidad_2 = $ver->cantidad_2;
            $cantidad_3 = $ver->cantidad_3;
            $cantidad_4 = $ver->cantidad_4;
            $cantidad_5 = $ver->cantidad_5;
            $ingre_1 = $ver->ingre_1;
            $ingre_2 = $ver->ingre_2;
            $ingre_3 = $ver->ingre_3;
            $ingre_4 = $ver->ingre_4;
            $ingre_5 = $ver->ingre_5;
        };

        $var2 = DB::select('select * from solicitudes where id = ?', [$request->solicitud]);

        foreach($var2 as $ver2){
            $cantidad_desayuno = $ver2->cantidad_desayuno;
        };

        $multi = $cantidad_desayuno * $cantidad_1;
        $multi2 = $cantidad_desayuno * $cantidad_2;
        $multi3 = $cantidad_desayuno * $cantidad_3;
        $multi4 = $cantidad_desayuno * $cantidad_4;
        $multi5 = $cantidad_desayuno * $cantidad_5;
        
        // for ($num = 1; $num++){

        //     $completo = $ingre_1 + $num;

        //     $var3 = DB::select('select * from productos where nombre_producto = ?', [$completo]);

        //     foreach($var3 as $ver3){
        //         $stock_actual = $ver3->stock_actual;
        //         $id = $ver3->id;
        //     };

        //     $producto = Producto::find($id);

        //     $total = $stock_actual - $multi;

        //     $producto->update([
        //         'stock_actual' => $total,
        //     ]);

        // }

        if($ingre_1 != null && $ingre_2 == null){

            $var3 = DB::select('select * from productos where nombre_producto = ?', [$ingre_1]);

            foreach($var3 as $ver3){
                $stock_actual = $ver3->stock_actual;
                $id = $ver3->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi;

            $producto->update([
                'stock_actual' => $total,
            ]);
        }

        if($ingre_1 != null && $ingre_2 != null && $ingre_3 == null){

            $var3 = DB::select('select * from productos where nombre_producto = ?', [$ingre_1]);

            foreach($var3 as $ver3){
                $stock_actual = $ver3->stock_actual;
                $id = $ver3->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi;

            $producto->update([
                'stock_actual' => $total,
            ]);
            
            $var4 = DB::select('select * from productos where nombre_producto = ?', [$ingre_2]);

            foreach($var4 as $ver4){
                $stock_actual = $ver4->stock_actual;
                $id = $ver4->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi2;

            $producto->update([
                'stock_actual' => $total,
            ]);
        }

        if($ingre_1 != null && $ingre_2 != null && $ingre_3 != null && $ingre_4 == null){

            $var3 = DB::select('select * from productos where nombre_producto = ?', [$ingre_1]);

            foreach($var3 as $ver3){
                $stock_actual = $ver3->stock_actual;
                $id = $ver3->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi;

            $producto->update([
                'stock_actual' => $total,
            ]);
            
            $var4 = DB::select('select * from productos where nombre_producto = ?', [$ingre_2]);

            foreach($var4 as $ver4){
                $stock_actual = $ver4->stock_actual;
                $id = $ver4->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi2;

            $producto->update([
                'stock_actual' => $total,
            ]);

            $var5 = DB::select('select * from productos where nombre_producto = ?', [$ingre_3]);

            foreach($var5 as $ver5){
                $stock_actual = $ver5->stock_actual;
                $id = $ver5->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi3;

            $producto->update([
                'stock_actual' => $total,
            ]);

            $var6 = DB::select('select * from productos where nombre_producto = ?', [$ingre_4]);

            foreach($var6 as $ver6){
                $stock_actual = $ver6->stock_actual;
                $id = $ver6->id;
            };

            $producto = Producto::find($id);

            $total = $stock_actual - $multi4;

            $producto->update([
                'stock_actual' => $total,
            ]);

        }

        return redirect()->back()->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
