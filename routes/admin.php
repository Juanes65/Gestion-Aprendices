<?php

use App\Http\Controllers\AprendiceController;
use App\Http\Controllers\DormitorioController;
use App\Http\Controllers\FichaController;
use App\Http\Controllers\InpeccioneController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas

Route::get('/fichas',                   [FichaController::class, 'index']) ->name('index.ficha');
Route::get('/fichas/agregar',           [FichaController::class, 'create'])->name('create.ficha');
Route::post('/fichas/almacenar',        [FichaController::class, 'store']) ->name('store.ficha');
Route::get('/ficha/editar/{ficha}',     [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{ficha}',            [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}',         [FichaController::class, 'destroy'])->name('destroy.ficha');

// Rutas de los aprendices

Route::get('/fichas/aprendiz',              [AprendiceController::class, 'index']) ->name('index.aprendiz');
Route::get('/fichas/aprendiz/agregar',      [FichaController::class, 'create'])->name('create.aprendiz');
Route::post('/fichas/aprendiz/almacenar',   [FichaController::class, 'store']) ->name('store.aprendiz');
// Route::get('/ficha/editar/{aprendiz}',     [FichaController::class, 'edit'])->name('edit.aprendiz');
// Route::put('/ficha/{aprendiz}',            [FichaController::class, 'update'])->name('update.aprendiz');
// Route::delete('/ficha/{aprendiz}',         [FichaController::class, 'destroy'])->name('destroy.aprendiz');

//Rutas de las habitaciones

Route::get('/Dormitorio',                       [DormitorioController::class, 'index']) ->name('index.dormitorio');
Route::get('/Dormitorio/agregar',               [DormitorioController::class, 'create'])->name('create.dormitorio');
Route::post('/Dormitorio/almacenar',            [DormitorioController::class, 'store']) ->name('store.dormitorio');
Route::get('/Dormitorio/editar/{dormitorio}',   [DormitorioController::class, 'edit'])->name('edit.dormitorio');
Route::put('/Dormitorio/{dormitorio}',          [DormitorioController::class, 'update'])->name('update.dormitorio');
Route::delete('/Dormitorio/{dormitorio}',       [DormitorioController::class, 'destroy'])->name('destroy.dormitorio');

//Rutas de la Inspecccion **poner esta seccion al final de las rutas**

Route::get('/Inspeccion',            [InpeccioneController::class,  'index'])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',    [InpeccioneController::class, 'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',   [InpeccioneController::class, 'store'])->name('store.inspeccion');
