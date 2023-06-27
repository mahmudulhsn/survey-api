<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SurveyController;
use App\Http\Controllers\Api\DashboardController;

Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/me', [AuthController::class, 'me']);
    Route::apiResource('surveys', SurveyController::class);

    Route::get('/dashboard', [DashboardController::class, 'index']);
});

Route::get('/survey/get-by-slug/{slug}', [SurveyController::class, 'getBySlug']);
Route::post('/survey/{id}/answer', [SurveyController::class, 'storeAnswer']);