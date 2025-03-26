<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;

// RUTA POR DEFECTO
Route::get('/', [CursoController::class, 'defaultFunction'])
    ->name('defaultFunction')
;

// FUNCION PARA USO DEL CONTROLLER
Route::get('/usoController/{nombreEjemplo?}', [CursoController::class, 'segundaFuncion'])
    ->name('usoControllerNombre')
    ->where('nombreEjemplo', '[A-Za-z]+');
;

// RUTA PARA OPERACIONES BASICAS
Route::get('/operacionesBasicas/{operacion}/{x?}/{y?}', [CursoController::class, 'operacionesBasicasFunction'])
    ->name('operacionesBasicasName')
    ->where('operacion', 'suma|resta|prod|div')
    ->where('x', '[0-9]+')
    ->where('y', '[0-9]+')
;