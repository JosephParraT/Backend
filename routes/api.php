<?php

use App\Http\Controllers\API\HabitacionController;
use App\Http\Controllers\API\ReservaController;
use App\Http\Controllers\API\ClienteController;
use App\Http\Controllers\API\ServicioAdicionalController;
use App\Http\Controllers\API\PagoController;

Route::apiResource('habitaciones', HabitacionController::class);
Route::apiResource('reservas', ReservaController::class);
Route::apiResource('clientes', ClienteController::class);
Route::apiResource('servicios-adicionales', ServicioAdicionalController::class);
Route::apiResource('pagos', PagoController::class);

Route::get('/habitaciones', 'HabitacionController@index');
Route::get('/reservas', 'ReservaController@index');