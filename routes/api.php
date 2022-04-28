<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

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

Route::get('cliente', [ClientController::class, 'index']);
Route::get('cliente/{id}', [ClientController::class, 'show']);
Route::post('cliente', [ClientController::class, 'store']);
Route::put('cliente/{id}', [ClientController::class, 'update']);
Route::delete('cliente/{id}', [ClientController::class, 'destroy']);
Route::get('cliente/final-placa/{numero}', [ClientController::class, 'showEndPlate']);