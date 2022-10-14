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
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PlatilloController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas

Route::get('/fichas',                               [FichaController::class, 'index'])->middleware('can:admin')->name('index.ficha');
Route::post('/fichas/filtrar',                      [FichaController::class, 'filtro'])->name('filtro.ficha');
Route::get('/fichas/agregar',                       [FichaController::class, 'create'])->name('create.ficha');
Route::post('/fichas/almacenar',                    [FichaController::class, 'store']) ->name('store.ficha');
Route::get('/ficha/editar/{ficha}',                 [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{id}',                           [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}',                     [FichaController::class, 'destroy'])->name('destroy.ficha');

//Rutas de las habitaciones

Route::get('/Dormitorio',                           [DormitorioController::class, 'index']) ->name('index.dormitorio');
Route::get('/Dormitorio/agregar',                   [DormitorioController::class, 'create'])->name('create.dormitorio');
Route::post('/Dormitorio/almacenar',                [DormitorioController::class, 'store']) ->name('store.dormitorio');
Route::get('/Dormitorio/editar/{dormitorio}',       [DormitorioController::class, 'edit'])->name('edit.dormitorio');
Route::put('/Dormitorio/{id}',                      [DormitorioController::class, 'update'])->name('update.dormitorio');
Route::delete('/Dormitorio/{dormitorio}',           [DormitorioController::class, 'destroy'])->name('destroy.dormitorio');

//Rutas de los apprendices

Route::get('/fichas/aprendiz/{id}',                  [AprendiceController::class, 'index'])->name('index.aprendiz');
Route::get('/fichas/aprendiz/{id}/agregar',          [FichaController::class, 'create2'])->name('create.aprendiz');
Route::post('/fichas/aprendiz/almacenar',            [FichaController::class, 'store2']) ->name('store.aprendiz');
Route::get('/ficha/aprendiz/editar/{aprendice}',     [AprendiceController::class, 'edit'])->name('edit.aprendiz');
Route::put('/ficha/aprendiz/{aprendice}',            [AprendiceController::class, 'update'])->name('update.aprendiz');
Route::delete('/ficha/aprendiz/{aprendice}',         [AprendiceController::class, 'destroy'])->name('destroy.aprendiz');

//Rutas de las novedades

Route::get('/Novedades',                            [NovedadeController::class, 'index'])->name('index.novedad');
Route::get('/Novedades/agregar{id}',                [NovedadeController::class, 'create'])->name('create.novedad');
Route::post('/Novedades/almacenar',                 [NovedadeController::class, 'store']) ->name('store.novedad');
Route::get('Novedades/editar/{novedade}',           [NovedadeController::class, 'edit'])->name('edit.novedad');
Route::put('Novedades/{novedade}',                  [NovedadeController::class, 'update'])->name('update.novedad');
Route::delete('Novedades/{novedade}',               [NovedadeController::class, 'destroy'])->name('destroy.novedad');

//rutas de la cocina

Route::get('/Cocina',                               [RestauranteController::class, 'index']) ->name('index.cocina');
Route::get('/Cocina/filtro',                        [RestauranteController::class, 'paginafiltro']) ->name('pagina.cocina');
Route::get('/Cocina/filtroDoc',                     [RestauranteController::class, 'paginafiltroDoc']) ->name('paginadoc.cocina');
// Route::get('/Cocina/filtroDoc/Dowload',             [RestauranteController::class, 'filtroPDF'])->name('dowload.cocina');
Route::post('/Cocina/filtrar',                      [RestauranteController::class, 'filtro'])->name('filtro.cocina');
Route::post('/Cocina/filtrarDoc',                   [RestauranteController::class, 'filtroDoc'])->name('filtrodoc.cocina');
Route::get('/Cocina/agregar',                       [RestauranteController::class, 'create'])->name('create.cocina');
Route::post('/Cocina/almacenar',                    [RestauranteController::class, 'store']) ->name('store.cocina');
Route::get('/Cocina/editar/{restaurante}',          [RestauranteController::class, 'edit'])->name('edit.cocina');
Route::put('/Cocina/{restaurante}',                 [RestauranteController::class, 'update'])->name('update.cocina');
Route::delete('/Cocina/{restaurante}',              [RestauranteController::class, 'destroy'])->name('destroy.cocina');

//Rutas de los consumos
Route::get('/Consumos/{id}',                        [ConsumoController::class, 'index']) ->name('index.consumos');
Route::get('/Consumos/edit/{consumo}',              [ConsumoController::class, 'edit']) ->name('edit.consumos');
Route::put('/Consumos/{consumo}',                   [ConsumoController::class, 'update'])->name('update.consumos');

//Ruta de cupos

Route::get('/fichas/aprendiz/Cupos/{id}',           [CupoController::class, 'index']) ->name('index.cupos');
Route::get('Cupos/{id}/Dowload-PDF',                [CupoController::class, 'dowloadPDF'])->name('dowload.cupos');
Route::get('/Cupos',                                [CupoController::class, 'indextodo']) ->name('indextodo.cupos');
Route::get('/Cupos/agregar/{id}',                   [CupoController::class, 'createCupo']) ->name('create.cupos');
Route::post('/Cupos/almacenar',                     [CupoController::class, 'storeCupo'])->name('store.cupos');
Route::get('/Cupos/edit/{id}',                      [CupoController::class, 'edit']) ->name('edit.cupos');
Route::put('/Cupos/{cupo}',                         [CupoController::class, 'update'])->name('update.cupos');
Route::delete('/fichas/aprendiz/Cupos/{cupo}',      [CupoController::class, 'destroy'])->name('destroy.cupos');

//Ruta de reportes

Route::get('/reportes',                             [ReporteController::class, 'index']) ->name('index.reporte');
Route::get('/reportes/agregar',                     [ReporteController::class, 'create']) ->name('create.reporte');
Route::post('/reportes/almacenar',                  [ReporteController::class, 'store'])->name('store.reporte');
Route::get('/reportes/edit/{id}',                   [ReporteController::class, 'edit']) ->name('edit.reporte');
Route::put('/reportes/{cupo}',                      [ReporteController::class, 'update'])->name('update.reporte');
Route::delete('/reportes/{cupo}',                   [ReporteController::class, 'destroy'])->name('destroy.reporte');

//Rutas de Solicitud

Route::get('/solicitud',                             [SolicitudeController::class, 'index'])->name('index.solicitud');
Route::get('/solicitud/agregar',                     [SolicitudeController::class, 'create'])->name('create.solicitud');
Route::post('/solicitud/almacenar',                  [SolicitudeController::class, 'store'])->name('store.solicitud');
Route::get('/solicitud/edit/{solicitude}',           [SolicitudeController::class, 'edit']) ->name('edit.solicitud');
Route::put('/solicitud/{solicitude}',                [SolicitudeController::class, 'update'])->name('update.solicitud');
Route::delete('/solicitud/{solicitude}',             [SolicitudeController::class, 'destroy'])->name('destroy.solicitud');

//Rutas de Bodega

Route::get('/bodega',                                [BodegaController::class, 'index'])->name('index.bodega');
Route::get('/bodega/agregar',                        [BodegaController::class, 'create'])->name('create.bodega');
Route::post('bodega/store',                          [BodegaController::class, 'store'])->name('store.bodega');
Route::get('/bodega/edit/{bodega}',                  [BodegaController::class, 'edit']) ->name('edit.bodega');
Route::put('/bodega/{bodega}',                       [BodegaController::class, 'update'])->name('update.bodega');
Route::delete('/bodega/{bodega}',                    [BodegaController::class, 'destroy'])->name('destroy.bodega');

//Rutas de Area

Route::get('/bodega/area/{id}',                      [AreaController::class, 'index'])->name('index.area');
Route::get('/area/agregar',                          [AreaController::class, 'create'])->name('create.area');
Route::post('/bodega/area/store',                    [AreaController::class, 'store'])->name('store.area');
Route::get('/bodega/area/edit/{area}',               [AreaController::class, 'edit']) ->name('edit.area');
Route::put('/bodega/area/{area}',                    [AreaController::class, 'update'])->name('update.area');
Route::delete('/bodega/area/{area}',                 [AreaController::class, 'destroy'])->name('destroy.area');

//Rutas de Producto

Route::get('/producto',                              [ProductoController::class, 'todo'])->name('index.todo');
Route::get('/bodega/area/producto/{id}',             [ProductoController::class, 'index'])->name('index.producto');
Route::get('/producto/agregar{id}',                  [ProductoController::class, 'create'])->name('create.producto');
Route::post('producto/store',                        [ProductoController::class, 'store'])->name('store.producto');
Route::get('/producto/edit/{producto}',              [ProductoController::class, 'edit']) ->name('edit.producto');
Route::put('/producto/{producto}',                   [ProductoController::class, 'update'])->name('update.producto');
Route::delete('/producto/{producto}',                [ProductoController::class, 'destroy'])->name('destroy.producto');

//Rutas de platillos

Route::get('/platillos',                             [PlatilloController::class, 'index'])->name('index.platillo');
Route::get('/platillo/agregar',                      [PlatilloController::class, 'create'])->name('create.platillo');
Route::post('platillo/store',                        [PlatilloController::class, 'store'])->name('store.platillo');
Route::get('/platillo/edit/{platillo}',              [PlatilloController::class, 'edit'])->name('edit.platillo');
Route::put('/platillo/{platillo}',                   [PlatilloController::class, 'update'])->name('update.platillo');
Route::delete('/platillo/{platillo}',                [PlatilloController::class, 'destroy'])->name('destroy.platillo');

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



