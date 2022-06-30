<?php

use App\Http\Controllers\FichaController;
use App\Http\Controllers\InpeccioneController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas
Route::get('/fichas',             [FichaController::class, 'index']) ->name('index.ficha');
Route::get('/fichas/agregar',     [FichaController::class, 'create'])->name('create.ficha');
Route::post('/fichas/almacenar',  [FichaController::class, 'store']) ->name('store.ficha');


//Rutas de la Inspecccion **poner esta seccion al final de las rutas**

Route::get('/Inspeccion',            [InpeccioneController::class,  'index'])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',    [InpeccioneController::class, 'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',   [InpeccioneController::class, 'store'])->name('store.inspeccion');

Route::get('/ficha/editar/{ficha}', [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{ficha}', [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}', [FichaController::class, 'destroy'])->name('destroy.ficha');