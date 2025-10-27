<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RecetaController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\DificultadController;
use App\Http\Controllers\IngredienteController;
use App\Http\Controllers\UsuarioController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

