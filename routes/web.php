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



Route::get('/', [FrontendController::class, 'dashboard'])->name('dashboard');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact.us');
Route::get('/Category', [FrontendController::class, 'category'])->name('category');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');
Route::get('/shopping-cart', [FrontendController::class, 'shopping_cart'])->name('shopping.cart');
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/login', [FrontendController::class, 'getLogin'])->name('login');






Route::middleware('auth')->group(function () {


    Route::prefix('admin')->group(function () {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

        Route::post('/register', [AuthController::class, 'attemptLogin'])->name('add.register');

    });

});

