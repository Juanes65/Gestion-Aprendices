<?php

use App\Http\Controllers\FichaController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas
Route::get('/ficha', [FichaController::class, 'index'])->name('index.ficha');
Route::get('/ficha/agregar', [FichaController::class, 'create'])->name('create.ficha');
Route::post('/ficha/almacenar', [FichaController::class, 'store'])->name('store.ficha');
Route::get('/ficha/editar/{ficha}', [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{ficha}', [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}', [FichaController::class, 'destroy'])->name('destroy.ficha');