<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductCategoryController;

Route::get('/orders', [OrderController::class, 'index']);
Route::get('/delivered/{id}', [OrderController::class, 'delivered']);
Route::get('/sendemail/{id}', [OrderController::class, 'sendemail']);
Route::post('/emailnote/{id}', [OrderController::class, 'emailnote']);


Route::resource('/product_cat', ProductCategoryController::class);
Route::resource('/product', ProductController::class);


Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/home', [HomeController::class, 'redirect'])->middleware('auth','verified');

Route::get('/', [HomeController::class, 'index']);
Route::get('/singleproduct/{id}', [HomeController::class, 'singleproduct']);
Route::post('/cart/{id}', [HomeController::class, 'cart']);
Route::get('/showcart', [HomeController::class, 'showcart']);
Route::get('/removecart/{id}',[HomeController::class, 'removecart']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::post('/checkoutorders', [HomeController::class, 'checkoutorders']);
