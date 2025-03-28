<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
// use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
// use App\Http\Controllers\DashboardController;
// Route::get('/', function () {
//     return view('welcome');
// });


// Web routes for authentication

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'registeradmin']);
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'loginadmin']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('/');

    Route::get('/category', [CategoryController::class, 'index']);
Route::post('/storecategory', [CategoryController::class, 'store']);
Route::get('/newecategory', [CategoryController::class, 'newecategory']);
Route::get('/newecategory', [CategoryController::class, 'newecategory']);
Route::get('/category/delete/{id}', [CategoryController::class, 'categorydelete']);

Route::get('/users', [UserController::class, 'index']);
Route::get('/useradmin/{id}', [UserController::class, 'useradmin']);
Route::get('/userview/{id}', [UserController::class, 'userview']);

});
