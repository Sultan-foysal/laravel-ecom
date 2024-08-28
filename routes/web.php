<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShofyController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;


Route::get('/',[ShofyController::class,'index'])->name('home');
Route::get('/shop',[ShofyController::class,'product'])->name('shop');
Route::get('/product/detail',[ShofyController::class,'productDetail'])->name('product.details');

Route::get('/cart',[ShofyController::class,'cart'])->name('product.cart');
Route::get('/checkout',[ShofyController::class,'checkout'])->name('product.checkout');

Route::get('/customer/register',[CustomerController::class,'register'])->name('customer.register');
Route::get('/customer/login',[CustomerController::class,'login'])->name('customer.login');





Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
});
