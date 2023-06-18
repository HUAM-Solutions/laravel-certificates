<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;

// Rutas para todos
Route::get('/register', [RegisterController::class, 'show']);
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/login', [LoginController::class, 'show']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::get('/home', [HomeController::class, 'index']);

// Rutas solo para administradores
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::resource('certificados', CertificadoController::class);
Route::resource('cursos', CursoController::class);




// Rutas solo para usuarios
Route::get('/profile',[ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/{user}/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');


// Route::get('/profile',[ProfileController::class, 'index']);

