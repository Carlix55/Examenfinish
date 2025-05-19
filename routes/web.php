<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\DepartamentoController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('departamentos', DepartamentoController::class);
Route::resource('empleados', EmpleadoController::class);
