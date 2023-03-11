<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndicadorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [IndicadorController::class, 'index']);

Route::post('deleteAjax',[IndicadorController::class, 'deleteAjax']);

Route::post('verAjax',[IndicadorController::class, 'verAjax']);

