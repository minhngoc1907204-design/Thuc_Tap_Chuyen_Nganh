<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\CommentController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\OrderController;
use App\Http\Controllers\admin\ProductController;
use Dom\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/blog_list', function () {
    return view('blog_list');
})->name('blog_list');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/testimonial', function () {
    return view('testimonial');
})->name('testimonial');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

////admin

Route::group(['prefix' => 'admin', 'as' => 'admin.'],function(){
    Route::resource('dashboard', AdminController::class);
    Route::resource('category',CategoryController::class);
    Route::resource('products_management',ProductController::class);
    Route::resource('comment',CommentController::class);
});
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin/customer_management', [CustomerController::class,'index'])->name('customer_management');

Route::get('/admin/order_management', [OrderController::class,'index'])->name('order_management');



Route::get('/admin/test', function () {
    return view('admin/test/test-list');
})->name('test');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});
