<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SpendingsController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\rotaController
;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// Public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Protected routes (require authentication)
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']); 
});
Route::get('/categorylist', [CategoryController::class, 'categorylist']); 
Route::post('/newspendings', [SpendingsController::class, 'create']); 
Route::get('/spendingslist', [SpendingsController::class, 'index']); 
Route::get('/spendingsdeleted/{id}', [SpendingsController::class, 'delete']); 
Route::get('/spendingedit/{id}', [SpendingsController::class, 'edit']); 
Route::post('/spendingsupdate', [SpendingsController::class, 'update']); 

Route::get('/getjob', [JobController::class, 'index']); 
Route::post('/createjob', [JobController::class, 'create']); 
Route::get('/jobdeleted/{id}', [JobController::class, 'delete']); 
Route::get('/jobedit/{id}', [JobController::class, 'edit']); 
Route::post('/jobupdate', [JobController::class, 'update']); 

Route::post('/jobrota', [rotaController::class, 'index']); 
Route::get('/getrota', [rotaController::class, 'getrota']); 
Route::post('/updaterotastatus', [rotaController::class, 'updatestatus']); 
