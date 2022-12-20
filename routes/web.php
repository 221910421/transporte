<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cargaController;
use App\Http\Controllers\transportitasController;
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
    return view('home');
});

Route::get('carga', 'App\Http\Controllers\cargaController@index')->name('carga');

//Route::get('/carga',[CargaController::class,'carga']);// mostrar todas la actividades

Route::get('crearCarga', function () {
    return view('crearDetalle');
});

Route::post('guardarDetalleCarga', 'App\Http\Controllers\cargaController@guardarDetalleCarga')->name('guardarDetalleCarga');
Route::get('verTransportistas', 'App\Http\Controllers\transportitasController@verTransportistas')->name('verTransportistas');



Route::post('login', 'App\Http\Controllers\loginController@login')->name('login');
