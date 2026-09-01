<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {
    // Auth Routes
    Route::post('/login', [App\Http\Controllers\Api\V1\AuthController::class, 'login']);

    // Protected Routes
    Route::middleware('auth:sanctum')->group(function () {
        Route::post('/logout', [App\Http\Controllers\Api\V1\AuthController::class, 'logout']);
        Route::get('/me', [App\Http\Controllers\Api\V1\AuthController::class, 'me']);

        // CRUD Routes
        Route::apiResource('fiturs', App\Http\Controllers\Api\V1\FiturController::class);
        Route::apiResource('pakets', App\Http\Controllers\Api\V1\PaketController::class);
        Route::apiResource('orders', App\Http\Controllers\Api\V1\OrderController::class);
        Route::apiResource('templates', App\Http\Controllers\Api\V1\TemplateController::class);
    });
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
