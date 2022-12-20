<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cargaController;

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

Route::resource('carga', cargaController::class);

//Route::get('/carga',[CargaController::class,'carga']);// mostrar todas la actividades