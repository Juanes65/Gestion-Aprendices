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

Route::get('/Inspeccion',                    [InpeccioneController::class,  'index' ])->name('index.inspeccion');
Route::get('/Inspeccion/{inpeccione}/ver',   [InpeccioneController::class,  'show'  ])->name('show.inspeccion');
Route::get('/Inspeccion/{inpeccione}/ver2',   [InpeccioneController::class,  'show2' ])->name('show2.inspeccion');
//Route::get('/Inspeccion/{inpeccione}/ver',   [InpeccioneController::class,  'show2'  ])->name('show2.inspeccion');
Route::get('/Inspeccion',                    [InpeccioneController::class,  'index' ])->name('index.inspeccion');
Route::get('/Inspeccion/agregar',            [InpeccioneController::class,  'create'])->name('create.inspeccion');
Route::post('/Inspeccion/guardar',           [InpeccioneController::class,  'store' ])->name('store.inspeccion');
Route::delete('delete/{inpeccione}',         [InpeccioneController::class, 'destroy'])->name('destroy.inspeccion');


   


