<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('farmer_login');
});


Route::get('/', [ProductController::class, 'getAllProducts'])->name('products.all');