<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HubController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsuarioController;
use App\Models\Usuario;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// HubController
Route::get('/', [HubController::class, 'index'])->name('hub.index');

// AuthController 
Route::get('/login', [AuthController::class, 'index'])->name('auth.index');
Route::get('/registro', [AuthController::class, 'register'])->name('auth.register');

// UsuarioController
Route::post('/register', [UsuarioController::class, 'store'])->name('usuario.store');