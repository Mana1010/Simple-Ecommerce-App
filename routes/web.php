<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     $products = Product::all();

// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('dashboard', [ProductController::class, 'index'])->name('dashboard');
    Route::get('product/create', [ProductController::class, 'product_form'])->name('product.create');
    Route::patch('product/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::post('product/store', [ProductController::class, 'store_product'])->name('product.store');
    Route::delete('product/delete', [ProductController::class, 'destroy_product'])->name('product.destroy');
});

require __DIR__.'/auth.php';
