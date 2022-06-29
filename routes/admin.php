<?php

use App\Http\Controllers\FichaController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas
Route::get('/fichas', [FichaController::class, 'index'])->name('index.ficha');
Route::get('/fichas/agregar', [FichaController::class, 'create'])->name('create.ficha');
Route::post('/fichas/almacenar', [FichaController::class, 'store'])->name('store.ficha');