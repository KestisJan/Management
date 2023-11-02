<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

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

// Home route
// Index route
Route::get('/', [HomeController::class, 'index']);

// User Controller
// Login route
Route::get('/login', [UserController::class, 'login']);
// Register route 
Route::get('/register', [UserController::class, 'create']);
// Store route
Route::post('/users', [UserController::class, 'store']);

// Admin Controller
// Admin index route
Route::get('/admin', [AdminController::class, 'index']);
// Admin edit route
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
// Admin update route
Route::put('/admin/{user}', [AdminController::class, 'update']);
