<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\FrontendController;
use \App\Http\Controllers\BlogController;
use \App\Http\Controllers\ContactController;
use App\Http\Controllers\FooterController;
use \App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;


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
Route::get('/products/{id}', [FrontendController::class, 'products'])->name('products');
Route::get('/all-products', [FrontendController::class, 'productsAll'])->name('all.products');
Route::get('/products-detail/{id}', [FrontendController::class, 'productsDetail'])->name('products.detail');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('wishlist');
Route::get('/shopping-cart', [FrontendController::class, 'shopping_cart'])->name('shopping.cart');
Route::get('/about-us', [FrontendController::class, 'about_us'])->name('about.us');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::post('/checkout-form', [CheckoutController::class, 'checkout_form'])->name('checkout.form');

Route::get('/login', [FrontendController::class, 'getLogin'])->name('get.login');
Route::post('/user-login', [AuthController::class, 'user_login'])->name('user.login');
Route::post('/user-email', [FrontendController::class, 'user_email'])->name('user.email');
Route::post('/user-logout', [AuthController::class, 'user_logout'])->name('user.logout');

Route::post('/add-to-wishlist', [WishlistController::class, 'wishlist'])->name('wish.list');

Route::post('/add-to-cart', [CartController::class, 'cart'])->name('add.to.cart');

Route::post('/cart-delete', [CartController::class, 'delete'])->name('cart.delete');
Route::post('/user-message', [FrontendController::class, 'user_message'])->name('user.message');
Route::get('/forgot-password-page', [FrontendController::class, 'forgot_password_page'])->name('forgot.password.page');
Route::post('/forgot', [AuthController::class, 'forgot'])->name('forgot');
Route::get('/code-page', [FrontendController::class, 'VerifyPage'])->name('verify.page');
Route::post('/verify-code', [AuthController::class, 'VerifyCode'])->name('verify.code');
Route::post('/verify-pass', [AuthController::class, 'VerifyPass'])->name('verify.pass');
Route::get('/new-password', [FrontendController::class, 'newPassword'])->name('new.password');
Route::post('/change-password', [AuthController::class, 'changePassword'])->name('change.password');









Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
        Route::get('/blogs', [AdminController::class, 'admin_blogs']);
        Route::post('/blogs-store', [BlogController::class, 'blogs_create'])->name('blogs.store');
        Route::get('/contact', [AdminController::class, 'admin_contact']);
        Route::post('/admin-create', [ContactController::class, 'contact_create'])->name('admin.create');
        Route::get('/category', [CategoryController::class, 'getCategory'])->name('get.category');
        Route::post('/category-add', [CategoryController::class, 'add'])->name('add.category');
        Route::post('/category-delete', [CategoryController::class, 'delete'])->name('delete.category');
        Route::post('/category-update', [CategoryController::class, 'update'])->name('update.category');
        Route::get('/colors', [ColorController::class, 'getColors'])->name('get.colors');
        Route::post('/colors-add', [ColorController::class, 'add'])->name('add.color');
        Route::post('/color-delete', [ColorController::class, 'delete'])->name('delete.color');
        Route::post('/color-update', [ColorController::class, 'update'])->name('update.color');
        Route::get('/size', [SizeController::class, 'getSize'])->name('get.size');
        Route::post('/size-add', [SizeController::class, 'add'])->name('add.size');
        Route::post('/size-delete', [SizeController::class, 'delete'])->name('delete.size');
        Route::post('/size-update', [SizeController::class, 'update'])->name('update.size');
        Route::get('/admin-blogs', [AdminController::class, 'admin_blogs'])->name('admin.blogs');
        Route::get('/blog-edit', [AdminController::class, 'blogs_edit'])->name('blogs.edit.page');
        Route::get('/admin-footer', [FooterController::class, 'admin_footer'])->name('admin.footer');
        Route::post('/footer', [FooterController::class, 'admin_footer_create'])->name('admin.footer.create');
        Route::get('/products', [ProductController::class, 'getProducts'])->name('get.products');
        Route::get('/products-create', [ProductController::class, 'createProducts'])->name('create.products');
        Route::get('/products-edit/{slug}', [ProductController::class, 'editProducts'])->name('edit.products');
        Route::post('/product-add', [ProductController::class, 'add'])->name('add.products');
        Route::post('/product-delete', [ProductController::class, 'delete'])->name('delete.products');
        Route::post('/product-update', [ProductController::class, 'update'])->name('update.products');
        Route::get('/orders', [CheckoutController::class, 'orders'])->name('orders');
        Route::post('/order-status', [CheckoutController::class, 'order_status'])->name('order.status');
        Route::get('/order-items/{id}', [CheckoutController::class, 'order_items'])->name('order.items');
    });
});
Route::get('/admin-login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::post('/attempt-login', [AuthController::class, 'attemptLogin'])->name('add.login');

Route::get('/register', [FrontendController::class, 'register'])->name('get.register');

//   ADMIN ROUTES
Route::get('/admin-login', [AdminController::class, 'admin_login'])->name('admin.login');
Route::get('/admin-blogs', [AdminController::class, 'admin_blogs'])->name('admin.blogs');
Route::get('/blog-edit', [AdminController::class, 'blogs_edit'])->name('blogs.edit.page');
Route::post('/blogs-store', [BlogController::class, 'blogs_create'])->name('blogs.setting.create');
Route::post('/edit', [BlogController::class, 'blog_edit_create'])->name('edit.blogs');
Route::post('/delete', [BlogController::class, 'blog_delete'])->name('blog.delete');
Route::get('/login', [FrontendController::class, 'getLogin'])->name('get.login');
Route::post('/attempt-login', [AuthController::class, 'attemptLogin'])->name('add.login');

Route::get('/register', [FrontendController::class, 'register'])->name('get.register');
Route::post('/attempt-register', [AuthController::class, 'createRegister'])->name('create.register');
Route::post('register-select-country', [AuthController::class, 'selectCountry'])->name('register.select_country');
Route::post('register-select-state', [AuthController::class, 'selectState'])->name('register.select_state');
Route::get('/admin-contact', [AdminController::class, 'admin_contact'])->name('admin.contacts');
Route::post('/admin-create', [ContactController::class, 'contact_create'])->name('admin.create');
