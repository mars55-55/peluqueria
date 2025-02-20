<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarberiaController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// Rutas de autenticación
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Ruta protegida para usuarios autenticados
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/', [BarberiaController::class, 'index']);
Route::get('/reservar', [ReservaController::class, 'index']);
Route::post('/reservar', [ReservaController::class, 'store']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Rutas para barberos
Route::resource('barberos', BarberoController::class);

// Rutas para especialidades
Route::resource('especialidades', EspecialidadController::class)->except(['show', 'edit', 'update']);

// Rutas para citas
Route::resource('citas', CitaController::class)->except(['show', 'edit', 'update']);

// Rutas para pagos
Route::resource('pagos', PagoController::class)->except(['show', 'edit', 'update']);

// Definir la ruta reservas.create
Route::get('/reservas/create', [ReservaController::class, 'create'])->name('reservas.create');