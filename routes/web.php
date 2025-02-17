<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ReservaController;

Route::get('/reservar', [ReservaController::class, 'index']);
Route::post('/reservar', [ReservaController::class, 'store']);

