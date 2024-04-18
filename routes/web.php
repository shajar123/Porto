<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/admin/dashboard',[DashboardController::class,'index']);
Route::get('/', [FrontendController::class, 'dashboard']);

Route::get('/login', [FrontendController::class, 'getLogin']);
Route::post('/register', [AuthController::class, 'attemptLogin'])->name('add.register');
