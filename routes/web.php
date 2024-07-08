<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\backendcontroller;
use App\Http\Controllers\cartcontroller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', function () {
    return view('home');
});

Route::get('/how-to-shop', function () {
    return view('how-to-shop');
});

Route::get('/support/reviews', function () {
    return view('support.reviews');
});

Route::get('/home_admin', function () {
    return view('home_admin');
});

Route::get('/support/faq', function () {
    return view('support.faq');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Bagian dimana untuk frontend
route::get('/products',[frontendcontroller::class, 'view_products_front']);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{product}', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');
});

// Authentication routes
Route::get('/register', function () {
    return view('register');
});

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'store_register']);
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticating']);
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// Admin user CRUD routes
Route::get('/admin/view_user', [backendcontroller::class, 'view_user']);
Route::post('/admin/view_user', [backendcontroller::class, 'store_user']);
Route::get('/admin/view_form', [backendcontroller::class, 'create_user']);
Route::delete('/admin/user-delete/{id}', [backendcontroller::class, 'delete_user']);
Route::get('/admin/view_edit/{id}', [backendcontroller::class, 'edit_user']);
Route::put('/admin/user-update/{id}', [backendcontroller::class, 'update_user']);

// Admin product CRUD routes
Route::get('/products/view_products', [backendcontroller::class, 'view_products']);
Route::post('/products/view_products', [backendcontroller::class, 'store_products']);
Route::get('/products/view_form', [backendcontroller::class, 'create_products']);
Route::delete('/products/products-delete/{id}', [backendcontroller::class, 'delete_products']);
Route::get('/products/view_edit/{id}', [backendcontroller::class, 'edit_products']);
Route::put('/products/products-update/{id}', [backendcontroller::class, 'update_products']);

// Contact routes
Route::get('/contact_us/view_contact', [backendcontroller::class, 'view_contact']);
Route::post('/contact', [backendcontroller::class, 'store_contact']);
Route::get('/contact', [frontendcontroller::class, 'contact']);
Route::delete('/contact-delete/{id}', [backendcontroller::class, 'delete_contact']);

require __DIR__.'/auth.php';

// Product details e-commerce API endpoints
Route::prefix('api/v1')->group(function () {
    Route::get('/products', [ProductController::class, 'index']); // List all products
    Route::get('/products/{id}', [ProductController::class, 'show']); // Retrieve a specific product
    Route::post('/products', [ProductController::class, 'store']); // Create a new product
    Route::put('/products/{id}', [ProductController::class, 'update']); // Update a product
    Route::delete('/products/{id}', [ProductController::class, 'destroy']); // Delete a product
});

use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;

// Home page route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Detailed order route
Route::post('/detailed-order', [OrderController::class, 'detailedOrder'])->name('detailed.order');

use App\Http\Controllers\CustomOrderController;

Route::post('/custom-orders', [CustomOrderController::class, 'store'])->name('custom-orders.store');


