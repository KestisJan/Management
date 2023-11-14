<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TruckerController;
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
// Login form route
Route::get('/login', [UserController::class, 'login']);
// Register route 
Route::get('/register', [UserController::class, 'create']);
// Store route
Route::post('/users', [UserController::class, 'store']);
// Log IN route
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
// Log User OUT
Route::post('/logout', [UserController::class, 'logout']);

// Admin Controller
// Admin index route
Route::get('/admin', [AdminController::class, 'index']);
// Admin edit route
Route::get('/admin/{user}/edit', [AdminController::class, 'edit'])->name('admin.edit');
// Admin update route
Route::put('/admin/{user}', [AdminController::class, 'update']);
// Admin view users role route
Route::get('/admin/roles/change/{user}', [AdminController::class, 'changeRoles'])->name('admin.roles.change');
// Admin assign role route
Route::put('admin/roles/update/{user}', [AdminController::class, 'assignRole'])->name('admin.roles.update');

// Trucker Controller
// Trucker index route
Route::get('/truckers', [TruckerController::class, 'index']);
// Trucker create route
Route::get('/truckers/create', [TruckerController::class, 'create']);