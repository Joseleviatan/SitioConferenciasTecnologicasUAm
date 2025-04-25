<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Página principal redirige al inicio 
Route::get('/', [PaginaController::class, 'inicio'])->name('home');

// Rutas de las páginas
Route::get('/inicio', [PaginaController::class, 'inicio'])->name('inicio');
Route::get('/eventos', [PaginaController::class, 'eventos'])->name('eventos');
Route::get('/registro', [PaginaController::class, 'registro'])->name('registro');

// Rutas generadas por el sistema de login
Auth::routes();


