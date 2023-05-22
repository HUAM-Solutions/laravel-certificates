<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificadoController;
use App\Http\Controllers\CursoController;


Route::resource('certificados', CertificadoController::class);
Route::resource('cursos', CursoController::class);

Route::get('/', function () {
    return view('welcome');
});
