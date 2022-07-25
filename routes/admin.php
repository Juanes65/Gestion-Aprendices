<?php

use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\DormitorioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InpeccioneController;
use App\Http\Controllers\ReporteController;
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
Route::get('/fichas/aprendiz/{id}',                   [AprendiceController::class, 'index'])->name('index.aprendiz');
Route::get('/fichas/aprendiz/{id}/agregar',           [FichaController::class, 'create2'])->name('create.aprendiz');
Route::post('/fichas/aprendiz/almacenar',        [FichaController::class, 'store2']) ->name('store.aprendiz');
Route::get('/ficha/aprendiz/editar/{aprendice}',     [AprendiceController::class, 'edit'])->name('edit.aprendiz');
Route::put('/ficha/aprendiz/{aprendice}',            [AprendiceController::class, 'update'])->name('update.aprendiz');
Route::delete('/ficha/aprendiz/{aprendice}',         [AprendiceController::class, 'destroy'])->name('destroy.aprendiz');

//rutas de la cocina

Route::get('/Cocina',                       [ReporteController::class, 'index']) ->name('index.cocina');
Route::get('/Cocina/agregar',               [ReporteController::class, 'create'])->name('create.cocina');
Route::post('/Cocina/almacenar',            [ReporteController::class, 'store']) ->name('store.cocina');
Route::get('/Cocina/editar/{reporte}',      [ReporteController::class, 'edit'])->name('edit.cocina');
Route::put('/Cocina/{reporte}',             [ReporteController::class, 'update'])->name('update.cocina');
Route::delete('/Cocina/{reporte}',          [ReporteController::class, 'destroy'])->name('destroy.cocina');

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

