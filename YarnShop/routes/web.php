<?php

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

////admin
Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/admin/category', function () {
    return view('admin/category/category-list');
})->name('category');

Route::get('/admin/customer_management', function () {
    return view('admin/customer_management/customer_management-list');
})->name('customer_management');

Route::get('/admin/order_management', function () {
    return view('admin/order_management/order_management-list');
})->name('order_management');

Route::get('/admin/products', function () {
    return view('admin/products/product-list');
})->name('products');

