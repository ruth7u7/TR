<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LugarTuristicoController;
use App\Http\Controllers\TrabajadorController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Cliente
Route::post('cliente/crear',[ClienteController::class, 'crear']);
Route::get('cliente/show',[ClienteController::class, 'mostrarcliente']);
Route::put('cliente/actualizar/{idcliente}',[ClienteController::class, 'actualizar']);
Route::delete('cliente/eliminar/{idcliente}',[ClienteController::class, 'eliminar']);

//Trabajador 
Route::post('trabajador/crear', [TrabajadorController::class, 'crear']);
Route::get('trabajador/show', [TrabajadorController::class, 'mostrartrabajador']);
Route::put('trabajador/actualizar/{idtrabajador}', [TrabajadorController::class, 'actualizar']);
Route::delete('trabajador/eliminar/{idtrabajador}', [TrabajadorController::class, 'eliminar']);

//LugarTuristico
Route::post('lugarturistico/crear', [LugarTuristicoController::class, 'crear']);
Route::get('lugarturistico/show',[LugarTuristicoController::class, 'mostrarlugares']);
Route::get('lugarturistico/actualizar/{id}',[LugarTuristicoController::class, 'actualizar']);
Route::get('lugarturistico/eliminar/{id}',[LugarTuristicoController::class, 'eliminar']);



