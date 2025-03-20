<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
// Route::put('test', [ProductController::class, 'test'])->name('test');


Route::resource('categories', CategoryController::class);
