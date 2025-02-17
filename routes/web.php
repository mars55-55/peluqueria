<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarberiaController;
use App\Http\Controllers\ReservaController;

Route::get('/', [BarberiaController::class, 'index']);
Route::get('/reservar', [ReservaController::class, 'index']);
Route::post('/reservar', [ReservaController::class, 'store']);

// Definir la ruta reservas.create
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');

// Habilitar rutas de autenticación
Auth::routes();