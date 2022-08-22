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
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas

Route::get('/fichas',                   [FichaController::class, 'index'])->middleware('can:admin')->name('index.ficha');
Route::get('/fichas/agregar',           [FichaController::class, 'create'])->name('create.ficha');
Route::post('/fichas/almacenar',        [FichaController::class, 'store']) ->name('store.ficha');
Route::get('/ficha/editar/{ficha}',     [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{id}',            [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}',         [FichaController::class, 'destroy'])->name('destroy.ficha');

//Rutas de las habitaciones

Route::get('/Dormitorio',                       [DormitorioController::class, 'index']) ->name('index.dormitorio');
Route::get('/Dormitorio/agregar',               [DormitorioController::class, 'create'])->name('create.dormitorio');
Route::post('/Dormitorio/almacenar',            [DormitorioController::class, 'store']) ->name('store.dormitorio');
Route::get('/Dormitorio/editar/{dormitorio}',   [DormitorioController::class, 'edit'])->name('edit.dormitorio');
Route::put('/Dormitorio/{dormitorio}',          [DormitorioController::class, 'update'])->name('update.dormitorio');
Route::delete('/Dormitorio/{dormitorio}',       [DormitorioController::class, 'destroy'])->name('destroy.dormitorio');

//Rutas de los apprendices

Route::get('/fichas/aprendiz/{id}',                  [AprendiceController::class, 'index'])->name('index.aprendiz');
Route::get('/fichas/aprendiz/{id}/agregar',          [FichaController::class, 'create2'])->name('create.aprendiz');
Route::post('/fichas/aprendiz/almacenar',            [FichaController::class, 'store2']) ->name('store.aprendiz');
Route::get('/ficha/aprendiz/editar/{aprendice}',     [AprendiceController::class, 'edit'])->name('edit.aprendiz');
Route::put('/ficha/aprendiz/{aprendice}',            [AprendiceController::class, 'update'])->name('update.aprendiz');
Route::delete('/ficha/aprendiz/{aprendice}',         [AprendiceController::class, 'destroy'])->name('destroy.aprendiz');

//Rutas de las novedades

Route::get('/Novedades',                   [NovedadeController::class, 'index'])->name('index.novedad');
Route::get('/Novedades/agregar',           [NovedadeController::class, 'create'])->name('create.novedad');
Route::post('/Novedades/almacenar',        [NovedadeController::class, 'store']) ->name('store.novedad');
Route::get('Novedades/editar/{novedade}',     [NovedadeController::class, 'edit'])->name('edit.novedad');
Route::put('Novedades/{novedade}',            [NovedadeController::class, 'update'])->name('update.novedad');
Route::delete('Novedades/{novedade}',         [NovedadeController::class, 'destroy'])->name('destroy.novedad');

//rutas de la cocina

Route::get('/Cocina',                       [RestauranteController::class, 'index']) ->name('index.cocina');
Route::get('/Cocina/agregar',               [RestauranteController::class, 'create'])->name('create.cocina');
Route::post('/Cocina/almacenar',            [RestauranteController::class, 'store']) ->name('store.cocina');
Route::get('/Cocina/editar/{restaurante}',      [RestauranteController::class, 'edit'])->name('edit.cocina');
Route::put('/Cocina/{restaurante}',             [RestauranteController::class, 'update'])->name('update.cocina');
Route::delete('/Cocina/{restaurante}',          [RestauranteController::class, 'destroy'])->name('destroy.cocina');

//Rutas asignacion de habitaciones a estudiantes

// Route::get('/Cupos',                       [CupoController::class, 'index']) ->name('index.cupo');
Route::get('/Cupos/agregar',               [CupoController::class, 'create'])->name('create.cupo');
Route::post('/Cupos/almacenar',            [CupoController::class, 'store']) ->name('store.cupo');
Route::get('/Cupos/editar/{reporte}',      [CupoController::class, 'edit'])->name('edit.cupo');
Route::put('/Cupos/{reporte}',             [CupoController::class, 'update'])->name('update.cupo');
Route::delete('/Cupos/{reporte}',          [CupoController::class, 'destroy'])->name('destroy.cupo');

//Rutas de los consumos
Route::get('/Consumos/{id}',                    [ConsumoController::class, 'index']) ->name('index.consumos');


//Rutas de la Inspecccion **poner esta seccion al final de las rutas**

Route::get('/Inspeccion',                    [InpeccioneController::class,  'index'])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',            [InpeccioneController::class, 'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',           [InpeccioneController::class, 'store'])->name('store.inspeccion');
Route::get('/Inspeccion',                    [InpeccioneController::class,  'index' ])->name('index.inspeccion');
Route::get('/Inspeccion/{inpeccione}/ver',   [InpeccioneController::class,  'show'  ])->name('show.inspeccion');
Route::get('/Inspeccion/{inpeccione}/ver2',  [InpeccioneController::class,  'show2' ])->name('show2.inspeccion');
Route::get('/Inspeccion',                    [InpeccioneController::class,  'index' ])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',            [InpeccioneController::class,  'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',           [InpeccioneController::class,  'store' ])->name('store.inspeccion');
Route::delete('delete/{inpeccione}',         [InpeccioneController::class, 'destroy'])->name('destroy.inspeccion');

