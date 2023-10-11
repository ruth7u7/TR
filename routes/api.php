<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LugarTuristicoController;
use App\Http\Controllers\TrabajadorController;
use App\Http\Controllers\BuController;
use App\Http\Controllers\CiudadController;
use App\Http\Controllers\FechaController;
use App\Http\Controllers\SedeController;
use App\Http\Controllers\ViajeController;
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
Route::get('cliente/login',[ClienteController::class, 'index'])->name('cliente.login');
//Cliente
Route::post('cliente/crear',[ClienteController::class, 'crear']);
Route::get('cliente/show',[ClienteController::class, 'mostrarcliente']);
Route::put('cliente/actualizar/{id}',[ClienteController::class, 'actualizar']);
Route::delete('cliente/eliminar/{id}',[ClienteController::class, 'eliminar']);

//Trabajador
Route::post('trabajador/crear', [TrabajadorController::class, 'crear']);
Route::get('trabajador/show', [TrabajadorController::class, 'mostrartrabajador']);
Route::put('trabajador/actualizar/{id}', [TrabajadorController::class, 'actualizar']);
Route::delete('trabajador/eliminar/{id}', [TrabajadorController::class, 'eliminar']);

//LugarTuristico
Route::post('lugarturistico/crear', [LugarTuristicoController::class, 'crear']);
Route::get('lugarturistico/show',[LugarTuristicoController::class, 'mostrarlugares']);
Route::get('lugarturistico/actualizar/{id}',[LugarTuristicoController::class, 'actualizar']);
Route::get('lugarturistico/eliminar/{id}',[LugarTuristicoController::class, 'eliminar']);

//Bus
Route::post('bus/crear',[BuController::class, 'crear']);
Route::get('bus/show',[BuController::class, 'mostrarBus']);
Route::put('bus/actualizar/{id}',[BuController::class, 'actualizar']);
Route::delete('bus/eliminar/{id}',[BuController::class, 'eliminar']);

//Ciudad
Route::post('ciudad/crear', [CiudadController::class, 'crear']);
Route::get('ciudad/show', [CiudadController::class, 'mostrarCiudad']);
Route::put('ciudad/actualizar/{id}', [CiudadController::class, 'actualizar']);
Route::delete('ciudad/eliminar/{id}', [CiudadController::class, 'eliminar']);

//Fecha
Route::post('fecha/crear', [FechaController::class, 'crear']);
Route::get('fecha/show',[FechaController::class, 'mostrarFecha']);
Route::get('fecha/actualizar/{id}',[FechaController::class, 'actualizar']);
Route::get('fecha/eliminar/{id}',[FechaController::class, 'eliminar']);

//Sede
Route::post('sede/crear', [SedeController::class, 'crear']);
Route::get('sede/show', [SedeController::class, 'mostrarSede']);
Route::put('sede/actualizar/{id}', [SedeController::class, 'actualizar']);
Route::delete('sede/eliminar/{id}', [SedeController::class, 'eliminar']);

//Viaje
Route::post('viaje/crear', [ViajeController::class, 'crear']);
Route::get('viaje/show',[ViajeController::class, 'mostrarViaje']);
Route::get('viaje/actualizar/{id}',[ViajeController::class, 'actualizar']);
Route::get('viaje/eliminar/{id}',[ViajeController::class, 'eliminar']);
