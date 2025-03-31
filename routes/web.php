<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);
// Route::put('test', [ProductController::class, 'test'])->name('test');


Route::resource('categories', CategoryController::class);

Route::get('test', function () {
    dd(Category::first()->products);
})->name('test');


Route::put('add-category/{product}', [ProductController::class, 'addCategory'])->name('add-category');
