<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;

// Rutas para todos
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index']);

// Rutas solo para administradores
Route::resource('certificados', CertificadoController::class);
Route::resource('cursos', CursoController::class);




// Rutas solo para usuarios
Route::get('/profile',[ProfileController::class, 'index']);


