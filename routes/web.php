<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\frontendcontroller;
use App\Http\Controllers\backendcontroller;
use App\Http\Controllers\cartcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/how-to-shop', function () {
    return view('how-to-shop');
});

Route::get('/support/reviews', function () {
    return view('/support/reviews');
});


Route::get('/home_admin', function () {
    return view('home_admin');
});

Route::get('/support/faq', function () {
    return view('/support/faq');
});

Route::get('/support', function () {
    return view('/support');
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
// add cart (testing)
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart', [CartController::class, 'add'])->name('cart.add');
Route::patch('/cart/{product}', [CartController::class, 'update'])->name('cart.update');
Route::delete('/cart/{product}', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/checkout', [CartController::class, 'checkout'])->name('cart.checkout');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Bagian dimana untuk register stuff
Route::get('/register', function () {
    return view('register');
});
route::get('/register',[AuthController::class, 'register']);
route::post('/register',[AuthController::class, 'store_register']);


//Bagian dimana untuk login stuff
route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
route::post('/login', [AuthController::class, 'authenticating']);
route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

//bagian dimana untuk crud user
route::get('/admin/view_user',[backendcontroller::class, 'view_user']);
route::post('/admin/view_user',[backendcontroller::class, 'store_user']);
route::get('/admin/view_form',[backendcontroller::class, 'create_user']);//->middleware('auth','must-admin');
route::delete('/admin/user-delete/{id}',[backendcontroller::class, 'delete_user']);
route::get('/admin/view_edit/{id}',[backendcontroller::class, 'edit_user']);
route::put('/admin/user-update/{id}',[backendcontroller::class, 'update_user']);

//bagian dimana untuk crud product
route::get('/products/view_products',[backendcontroller::class, 'view_products']);
route::post('/products/view_products',[backendcontroller::class, 'store_products']);
route::get('/products/view_form',[backendcontroller::class, 'create_products']);//->middleware('auth','must-admin');
route::delete('/products/products-delete/{id}',[backendcontroller::class, 'delete_products']);
route::get('/products/view_edit/{id}',[backendcontroller::class, 'edit_products']);
route::put('/products/products-update/{id}',[backendcontroller::class, 'update_products']);

//bagian dimana untuk contact us
route::get('/contact_us/view_contact',[backendcontroller::class, 'view_contact']);
route::post('/contact',[backendcontroller::class, 'store_contact']);
route::get('/contact',[frontendcontroller::class, 'contact']);
route::delete('/contact-delete/{id}',[backendcontroller::class, 'delete_contact']);

require __DIR__.'/auth.php';
