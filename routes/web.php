<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('departamentos', DepartamentoController::class);
Route::resource('empleados', EmpleadoController::class);
