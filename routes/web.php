<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AuthController;

// Pagina principal
Route::get('/', [PageController::class, 'principal'])->name('principal');

// Paginas secundarias
Route::get('/accesorios', [PageController::class, 'accesorios'])->name('accesorios');
Route::get('/ropa', [PageController::class, 'ropa'])->name('ropa');
Route::get('/suplementacion', [PageController::class, 'suplementacion'])->name('suplementacion');
Route::get('/ubicacion', [PageController::class, 'ubicacion'])->name('ubicacion');
Route::get('/equipo', [PageController::class, 'equipo'])->name('equipo');
Route::get('/politica', [PageController::class, 'politica'])->name('politica');
Route::get('/terminos', [PageController::class, 'terminos'])->name('terminos');

// Autenticacion o inicio de sesion

Route::get('register', [AuthController::class, 'showRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);

Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('dashboard', function () {
    return "Bienvenido, estás logueado!";
})->middleware('auth')->name('dashboard');
