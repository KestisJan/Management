<?php

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
// Register route 
Route::get('/register', [UserController::class, 'create']);
// Store route
Route::get('/users', [UserController::class, 'store']);