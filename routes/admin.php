<?php

use App\Http\Controllers\FichaController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Rutas de las fichas



Route::get('/ficha/editar/{ficha}', [FichaController::class, 'edit'])->name('edit.ficha');
Route::put('/ficha/{ficha}', [FichaController::class, 'update'])->name('update.ficha');
Route::delete('/ficha/{ficha}', [FichaController::class, 'destroy'])->name('destroy.ficha');