<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\FormularioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articulos', [ArticuloController::class, 'index']);

Route::get('/productos/create', [FormularioController::class, 'create']);

Route::post('/productos', [FormularioController::class, 'store']);