<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Ruta de inicio que usa el método 'index' del 'UserController'
Route::get('/', [UserController::class, 'index']);

// Ruta para crear un usuario usando el método 'store' del 'UserController'
Route::post('users', [UserController::class, 'store'])->name('users.store');

// Ruta para eliminar un usuario usando el método 'destroy' del 'UserController'
Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


