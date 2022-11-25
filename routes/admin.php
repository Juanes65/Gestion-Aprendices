<?php

use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\ConsumoController;
use App\Http\Controllers\CupoController;
use App\Http\Controllers\DormitorioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InpeccioneController;
use App\Http\Controllers\NovedadeController;
use App\Http\Controllers\ReporteController;
use App\Http\Controllers\RestauranteController;
use App\Http\Controllers\SolicitudeController;
use App\Http\Controllers\BodegaController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\PlatilloSolicitudeController;
use App\Http\Controllers\ProvedoreController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas

Route::get('/fichas',                               [FichaController::class, 'index'])->middleware('can:admin')->name('index.ficha');
Route::post('/fichas/filtrar',                      [FichaController::class, 'filtro'])->middleware('can:admin')->name('filtro.ficha');
Route::get('/fichas/agregar',                       [FichaController::class, 'create'])->middleware('can:admin')->name('create.ficha');
Route::post('/fichas/almacenar',                    [FichaController::class, 'store'])->middleware('can:admin')->name('store.ficha');
Route::get('/ficha/editar/{ficha}',                 [FichaController::class, 'edit'])->middleware('can:admin')->name('edit.ficha');
Route::put('/ficha/{id}',                           [FichaController::class, 'update'])->middleware('can:admin')->name('update.ficha');
Route::delete('/ficha/{ficha}',                     [FichaController::class, 'destroy'])->middleware('can:admin')->name('destroy.ficha');

//Rutas de las habitaciones

Route::get('/Dormitorio',                           [DormitorioController::class, 'index'])->middleware('can:admin')->name('index.dormitorio');
Route::get('/Dormitorio/agregar',                   [DormitorioController::class, 'create'])->middleware('can:admin')->name('create.dormitorio');
Route::post('/Dormitorio/almacenar',                [DormitorioController::class, 'store'])->middleware('can:admin')->name('store.dormitorio');
Route::get('/Dormitorio/editar/{dormitorio}',       [DormitorioController::class, 'edit'])->middleware('can:admin')->name('edit.dormitorio');
Route::put('/Dormitorio/{id}',                      [DormitorioController::class, 'update'])->middleware('can:admin')->name('update.dormitorio');
Route::delete('/Dormitorio/{dormitorio}',           [DormitorioController::class, 'destroy'])->middleware('can:admin')->name('destroy.dormitorio');

//Rutas de los apprendices

Route::get('/fichas/aprendiz/{id}',                  [AprendiceController::class, 'index'])->middleware('can:admin')->name('index.aprendiz');
Route::get('/fichas/aprendiz/{id}/agregar',          [FichaController::class, 'create2'])->middleware('can:admin')->name('create.aprendiz');
Route::post('/fichas/aprendiz/almacenar',            [FichaController::class, 'store2'])->middleware('can:admin')->name('store.aprendiz');
Route::get('/ficha/aprendiz/editar/{aprendice}',     [AprendiceController::class, 'edit'])->middleware('can:admin')->name('edit.aprendiz');
Route::put('/ficha/aprendiz/{aprendice}',            [AprendiceController::class, 'update'])->middleware('can:admin')->name('update.aprendiz');
Route::delete('/ficha/aprendiz/{aprendice}',         [AprendiceController::class, 'destroy'])->middleware('can:admin')->name('destroy.aprendiz');

//Rutas de las novedades

Route::get('/Novedades',                            [NovedadeController::class, 'index'])->middleware('can:admin')->name('index.novedad');
Route::get('/Novedades/agregar{id}',                [NovedadeController::class, 'create'])->middleware('can:admin')->name('create.novedad');
Route::post('/Novedades/almacenar',                 [NovedadeController::class, 'store'])->middleware('can:admin')->name('store.novedad');
Route::get('Novedades/editar/{novedade}',           [NovedadeController::class, 'edit'])->middleware('can:admin')->name('edit.novedad');
Route::put('Novedades/{novedade}',                  [NovedadeController::class, 'update'])->middleware('can:admin')->name('update.novedad');
Route::delete('Novedades/{novedade}',               [NovedadeController::class, 'destroy'])->middleware('can:admin')->name('destroy.novedad');

//rutas de la cocina

Route::get('/Cocina',                               [RestauranteController::class, 'index'])->middleware('can:admin')->name('index.cocina');
Route::get('/Cocina/filtro',                        [RestauranteController::class, 'paginafiltro'])->middleware('can:admin')->name('pagina.cocina');
Route::get('/Cocina/filtroDoc',                     [RestauranteController::class, 'paginafiltroDoc'])->middleware('can:admin')->name('paginadoc.cocina');
Route::get('/Cocina/filtroDoc/Dowload{id}',         [RestauranteController::class, 'filtroPDF'])->middleware('can:admin')->name('dowload.cocina');
Route::post('/Cocina/filtrar',                      [RestauranteController::class, 'filtro'])->middleware('can:admin')->name('filtro.cocina');
Route::post('/Cocina/filtrarDoc',                   [RestauranteController::class, 'filtroDoc'])->middleware('can:admin')->name('filtrodoc.cocina');
Route::get('/Cocina/agregar',                       [RestauranteController::class, 'create'])->middleware('can:admin')->name('create.cocina');
Route::post('/Cocina/almacenar',                    [RestauranteController::class, 'store'])->middleware('can:admin')->name('store.cocina');
Route::get('/Cocina/editar/{restaurante}',          [RestauranteController::class, 'edit'])->middleware('can:admin')->name('edit.cocina');
Route::put('/Cocina/{restaurante}',                 [RestauranteController::class, 'update'])->middleware('can:admin')->name('update.cocina');
Route::delete('/Cocina/{restaurante}',              [RestauranteController::class, 'destroy'])->middleware('can:admin')->name('destroy.cocina');

//Rutas de los consumos
Route::get('/Consumos/{id}',                        [ConsumoController::class, 'index'])->middleware('can:admin')->name('index.consumos');
Route::get('/Consumos/edit/{consumo}',              [ConsumoController::class, 'edit'])->middleware('can:admin')->name('edit.consumos');
Route::put('/Consumos/{consumo}',                   [ConsumoController::class, 'update'])->middleware('can:admin')->name('update.consumos');

//Ruta de cupos

Route::get('/fichas/aprendiz/Cupos/{id}',           [CupoController::class, 'index'])->middleware('can:admin')->name('index.cupos');
Route::get('Cupos/{id}/Dowload-PDF',                [CupoController::class, 'dowloadPDF'])->middleware('can:admin')->name('dowload.cupos');
Route::get('/Cupos',                                [CupoController::class, 'indextodo'])->middleware('can:admin')->name('indextodo.cupos');
Route::get('/Cupos/agregar/{id}',                   [CupoController::class, 'createCupo'])->middleware('can:admin')->name('create.cupos');
Route::post('/Cupos/almacenar',                     [CupoController::class, 'storeCupo'])->middleware('can:admin')->name('store.cupos');
Route::get('/Cupos/edit/{id}',                      [CupoController::class, 'edit'])->middleware('can:admin')->name('edit.cupos');
Route::put('/Cupos/{cupo}',                         [CupoController::class, 'update'])->middleware('can:admin')->name('update.cupos');
Route::delete('/fichas/aprendiz/Cupos/{cupo}',      [CupoController::class, 'destroy'])->middleware('can:admin')->name('destroy.cupos');

//Ruta de reportes

Route::get('/reportes',                             [ReporteController::class, 'index'])->middleware('can:admin')->name('index.reporte');
Route::get('/reportes/agregar',                     [ReporteController::class, 'create'])->middleware('can:admin')->name('create.reporte');
Route::post('/reportes/almacenar',                  [ReporteController::class, 'store'])->middleware('can:admin')->name('store.reporte');
Route::get('/reportes/edit/{id}',                   [ReporteController::class, 'edit'])->middleware('can:admin')->name('edit.reporte');
Route::put('/reportes/{cupo}',                      [ReporteController::class, 'update'])->middleware('can:admin')->name('update.reporte');
Route::delete('/reportes/{cupo}',                   [ReporteController::class, 'destroy'])->middleware('can:admin')->name('destroy.reporte');

//Rutas de Solicitud

Route::get('/solicitud',                             [SolicitudeController::class, 'index'])->middleware('can:cocina')->name('index.solicitud');
Route::get('/solicitud/agregar',                     [SolicitudeController::class, 'create'])->middleware('can:cocina')->name('create.solicitud');
Route::post('/solicitud/almacenar',                  [SolicitudeController::class, 'store'])->middleware('can:cocina')->name('store.solicitud');
Route::get('/solicitud/edit/{solicitude}',           [SolicitudeController::class, 'edit'])->middleware('can:cocina')->name('edit.solicitud');
Route::put('/solicitud/update/{solicitude}',         [SolicitudeController::class, 'update'])->middleware('can:cocina')->name('update.solicitud');
Route::delete('/solicitud/{solicitude}',             [SolicitudeController::class, 'destroy'])->middleware('can:cocina')->name('destroy.solicitud');

//Rutas de Bodega

Route::get('/bodega',                                [BodegaController::class, 'index'])->middleware('can:cocina')->name('index.bodega');
Route::get('/bodega/agregar',                        [BodegaController::class, 'create'])->middleware('can:cocina')->name('create.bodega');
Route::post('bodega/store',                          [BodegaController::class, 'store'])->middleware('can:cocina')->name('store.bodega');
Route::get('/bodega/edit/{bodega}',                  [BodegaController::class, 'edit'])->middleware('can:cocina') ->name('edit.bodega');
Route::put('/bodega/{bodega}',                       [BodegaController::class, 'update'])->name('update.bodega');
Route::delete('/bodega/{bodega}',                    [BodegaController::class, 'destroy'])->name('destroy.bodega');

//Rutas de Area

Route::get('/bodega/area/{id}',                      [AreaController::class, 'index'])->middleware('can:cocina')->name('index.area');
Route::get('/area/agregar',                          [AreaController::class, 'create'])->middleware('can:cocina')->name('create.area');
Route::post('/bodega/area/store',                    [AreaController::class, 'store'])->middleware('can:cocina')->name('store.area');
Route::get('/bodega/area/edit/{area}',               [AreaController::class, 'edit'])->middleware('can:cocina') ->name('edit.area');
Route::put('/bodega/area/{area}',                    [AreaController::class, 'update'])->middleware('can:cocina')->name('update.area');
Route::delete('/bodega/area/{area}',                 [AreaController::class, 'destroy'])->middleware('can:cocina')->name('destroy.area');

//Rutas de Producto

Route::get('/producto',                              [ProductoController::class, 'todo'])->middleware('can:cocina')->name('index.todo');
Route::get('/producto/minimo',                       [ProductoController::class, 'minimo'])->middleware('can:cocina')->name('index.minimo');
Route::get('/bodega/area/producto/{id}',             [ProductoController::class, 'index'])->middleware('can:cocina')->name('index.producto');
Route::get('/producto/agregar{id}',                  [ProductoController::class, 'create'])->middleware('can:cocina')->name('create.producto');
Route::post('producto/store',                        [ProductoController::class, 'store'])->middleware('can:cocina')->name('store.producto');
Route::get('/producto/edit/{producto}',              [ProductoController::class, 'edit'])->middleware('can:cocina') ->name('edit.producto');
Route::put('/producto/{producto}',                   [ProductoController::class, 'update'])->middleware('can:cocina')->name('update.producto');
Route::delete('/producto/{producto}',                [ProductoController::class, 'destroy'])->middleware('can:cocina')->name('destroy.producto');

//Rutas de platillos

Route::get('/platillos',                             [PlatilloController::class, 'index'])->middleware('can:cocina')->name('index.platillo');
Route::get('/platillo/agregar',                      [PlatilloController::class, 'create'])->middleware('can:cocina')->name('create.platillo');
Route::post('platillo/store',                        [PlatilloController::class, 'store'])->middleware('can:cocina')->name('store.platillo');
Route::get('/platillo/edit/{platillo}',              [PlatilloController::class, 'edit'])->middleware('can:cocina')->name('edit.platillo');
Route::put('/platillo/{platillo}',                   [PlatilloController::class, 'update'])->middleware('can:cocina')->name('update.platillo');
Route::delete('/platillo/{platillo}',                [PlatilloController::class, 'destroy'])->middleware('can:cocina')->name('destroy.platillo');

//Rutas Platillo Solicitud

Route::get('/platilloSolicitud',                                [PlatilloSolicitudeController::class, 'index'])->middleware('can:cocina')->name('index.platillo_s');
Route::get('/platilloSolicitud/agregar',                        [PlatilloSolicitudeController::class, 'create'])->middleware('can:cocina')->name('create.platillo_s');
Route::post('platilloSolicitud/store',                          [PlatilloSolicitudeController::class, 'store'])->middleware('can:cocina')->name('store.platillo_s');
//Route::get('/platilloSolicitud/edit/{platilloSolicitud}',       [PlatilloSolicitudeController::class, 'edit'])->name('edit.platillo_s');
//Route::put('/platilloSolicitud/{platilloSolicitud}',            [PlatilloSolicitudeController::class, 'update'])->name('update.platillo_s');
Route::delete('/platilloSolicitud/eliminar/{platilloSolicitude}',        [PlatilloSolicitudeController::class, 'destroy'])->middleware('can:cocina')->name('destroy.platillo_s');

//rutas del desayno

Route::get('/Pedido/agregar',                        [PedidoController::class, 'create'])->middleware('can:cocina')->name('create.pedido');
Route::post('/Pedido/store',                          [PedidoController::class, 'store'])->middleware('can:cocina')->name('store.pedido');
Route::put('/platilloSolicitud/{pedido}',             [PedidoController::class, 'update'])->middleware('can:cocina')->name('update.pedido');

//rutas de solicitud almuerzos

Route::get('/Pedido/agregar2',                         [PedidoController::class, 'create2'])->name('create2.pedido');
Route::post('/Pedido/store2',                          [PedidoController::class, 'store2'])->name('store2.pedido');
// Route::put('/platilloSolicitud/{pedido}',             [PedidoController::class, 'update'])->name('update.pedido');

//rutas de solicitud cenas

Route::get('/Pedido/agregar3',                         [PedidoController::class, 'create3'])->name('create3.pedido');
Route::post('/Pedido/store3',                          [PedidoController::class, 'store3'])->name('store3.pedido');
// Route::put('/platilloSolicitud/{pedido}',             [PedidoController::class, 'update'])->name('update.pedido');

//rutas del los provedores

Route::get('/Porveores',                                [ProvedoreController::class, 'index'])->middleware('can:cocina')->name('index.provedor');
Route::get('/Porveores/agregar',                        [ProvedoreController::class, 'create'])->middleware('can:cocina')->name('create.provedor');
Route::post('Porveores/store',                          [ProvedoreController::class, 'store'])->middleware('can:cocina')->name('store.provedor');
Route::get('/Porveores/edit/{provedore}',               [ProvedoreController::class, 'edit'])->middleware('can:cocina')->name('edit.provedor');
Route::put('/Porveores/edit/{provedore}',               [ProvedoreController::class, 'update'])->middleware('can:cocina')->name('update.provedor');
Route::delete('/Porveores/{provedore}',                 [ProvedoreController::class, 'destroy'])->middleware('can:cocina')->name('destroy.provedor');

//Rutas de la Inspecccion **poner esta seccion al final de las rutas**

Route::get('/Inspeccion',                           [InpeccioneController::class,  'index'])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',                   [InpeccioneController::class, 'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',                  [InpeccioneController::class, 'store'])->name('store.inspeccion');
Route::get('/Inspeccion',                           [InpeccioneController::class,  'index' ])->name('index.inspeccion');
Route::get('/Inspeccion/{inpeccione}/ver',          [InpeccioneController::class,  'show'  ])->name('show.inspeccion');
Route::get('/Inspeccion/{inpeccione}/ver2',         [InpeccioneController::class,  'show2' ])->name('show2.inspeccion');
Route::get('/Inspeccion',                           [InpeccioneController::class,  'index' ])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',                   [InpeccioneController::class,  'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',                  [InpeccioneController::class,  'store' ])->name('store.inspeccion');
Route::delete('delete/{inpeccione}',                [InpeccioneController::class, 'destroy'])->name('destroy.inspeccion');



