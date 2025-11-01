<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => ''], function () {
    Route::get('', [HomeController::class, 'index']);
    Route::get('home', [HomeController::class, 'index']);
    Route::get('home/index', [HomeController::class, 'index']);
});

Route::group(['prefix' => 'products'], function () {
    Route::get('', [ProductsController::class, 'index']);
    Route::get('index', [ProductsController::class, 'index']);
});

Route::group(['prefix' => 'blog'], function () {
    Route::get('', [BlogController::class, 'index']);
    Route::get('index', [BlogController::class, 'index']);
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('', [ContactController::class, 'index']);
    Route::get('index', [ContactController::class, 'index']);
});

Route::group(['prefix' => 'about'], function () {
    Route::get('', [AboutController::class, 'index']);
    Route::get('index', [AboutController::class, 'index']);
});

Route::group(['prefix' => 'testimonial'], function () {
    Route::get('', [TestimonialController::class, 'index']);
    Route::get('index', [TestimonialController::class, 'index']);
});
