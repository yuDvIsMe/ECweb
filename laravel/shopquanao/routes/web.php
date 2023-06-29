<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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
#USER
Route::get('/', [HomeController::class, 'index']);

Route::get('/trang-chu', [HomeController::class, 'index']);

#ADMIN

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/logout', [AdminController::class, 'logout']);


Route::get('/admin/dashboard', [AdminController::class, 'show_dashboard']);

Route::post('/admin-dashboard', [AdminController::class, 'dashboard']);



