<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontendController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\ContactController;


use \App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Models\Category;
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
Route::get('/blog-details/{id}', [FrontendController::class, 'blog_details'])->name('blog.details');
Route::get('/contact-us', [FrontendController::class, 'contact_us'])->name('contact.us');
Route::get('/Category', [FrontendController::class, 'category'])->name('category');
Route::get('/products', [FrontendController::class, 'products'])->name('products');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');
Route::get('/shopping-cart', [FrontendController::class, 'shopping_cart'])->name('shopping.cart');
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');






Route::middleware('auth')->group(function () {


    Route::prefix('admin')->group(function () {
        Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

        Route::get('/blogs', [AdminController::class, 'admin_blogs']);
        Route::post('/blogs-store', [BlogController::class, 'blogs_create'])->name('blogs.store');



        Route::get('/contact', [AdminController::class, 'admin_contact']);
        Route::post('/admin-create', [ContactController::class, 'contact_create'])->name('admin.create');
        Route::get('/category', [CategoryController::class, 'getCategory'])->name('get.category');
        Route::post('/category-add', [CategoryController::class, 'add'])->name('add.category');

    });

});

Route::get('/login', [FrontendController::class, 'getLogin'])->name('get.login');
Route::post('/register', [AuthController::class, 'attemptLogin'])->name('add.register');





                    //   ADMIN ROUTES
 Route::get('/admin-login', [AdminController::class, 'admin_login'])->name('admin.login');

 Route::get('/admin-blogs', [AdminController::class, 'admin_blogs'])->name('admin.blogs');
 Route::get('/blog-edit', [AdminController::class, 'blogs_edit'])->name('blogs.edit.page');


 Route::post('/blogs-store', [BlogController::class, 'blogs_create'])->name('blogs.setting.create');

 Route::post('/edit', [BlogController::class, 'blog_edit_create'])->name('edit.blogs');


 Route::post('/delete', [BlogController::class, 'blog_delete'])->name('blog.delete');





 Route::get('/admin-contact', [AdminController::class, 'admin_contact'])->name('admin.contacts');
 Route::post('/admin-create', [ContactController::class, 'contact_create'])->name('admin.create');






