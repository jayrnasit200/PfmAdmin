<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SpendingsController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']); // Example protected route
});
Route::get('/categorylist', [CategoryController::class, 'categorylist']); // Example protected route
Route::post('/newspendings', [SpendingsController::class, 'create']); // Example protected route

