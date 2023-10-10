<?php

use App\Http\Controllers\LugarTuristicoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//lama a formulario
Route::get('lugares/mostrar', [LugarTuristicoController::class, 'index']);
//guardar
Route::post('lugares/guardar', [LugarTuristicoController::class, 'crear']);
