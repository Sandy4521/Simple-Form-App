<?php


use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


// Routes
Route::get('/products/create', ProductController::class)->name('forms');
Route::post('/products/create', [ProductController::class, 'store'])->name('forms.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}', [ProductController::class, 'delete'])->name('products.delete');
