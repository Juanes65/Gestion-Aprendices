<?php

use App\Http\Controllers\DormitorioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InpeccioneController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas

Route::get('/fichas',                   [FichaController::class, 'index'])->middleware('can:admin')->name('index.ficha');
Route::get('/fichas/agregar',           [FichaController::class, 'create'])->name('create.ficha');
Route::post('/fichas/almacenar',        [FichaController::class, 'store']) ->name('store.ficha');
Route::get('/ficha/editar/{ficha}',     [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{ficha}',            [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}',         [FichaController::class, 'destroy'])->name('destroy.ficha');

//Rutas de las habitaciones

Route::get('/Dormitorio',                       [DormitorioController::class, 'index']) ->name('index.dormitorio');
Route::get('/Dormitorio/agregar',               [DormitorioController::class, 'create'])->name('create.dormitorio');
Route::post('/Dormitorio/almacenar',            [DormitorioController::class, 'store']) ->name('store.dormitorio');
Route::get('/Dormitorio/editar/{dormitorio}',   [DormitorioController::class, 'edit'])->name('edit.dormitorio');
Route::put('/Dormitorio/{dormitorio}',          [DormitorioController::class, 'update'])->name('update.dormitorio');
Route::delete('/Dormitorio/{dormitorio}',       [DormitorioController::class, 'destroy'])->name('destroy.dormitorio');

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

