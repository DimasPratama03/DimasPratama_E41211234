<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/api_product', [ApiProductController::class, 'getAll']);
Route::get('/api_product/{id}', [ApiProductController::class, 'getTik']);
Route::post('/api_product', [ApiProductController::class, 'createTik']);
Route::put('/api_product/{id}', [ApiProductController::class, 'updateTik']);
Route::delete('/api_product/{id}', [ApiProductController::class, 'deleteTik']);
