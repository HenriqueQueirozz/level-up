<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{SellerController, SaleController, ProductController};

Route::get('/', function () {return view('welcome');});

Route::get('/seller', [SellerController::class, 'index'])->name('seller.index');
Route::get('/seller/create', [SellerController::class, 'create'])->name('seller.create');
Route::get('/seller/{id}', [SellerController::class, 'show'])->name('seller.show');
Route::post('/seller', [SellerController::class, 'store'])->name('seller.store');
Route::get('/seller/{id}/edit', [SellerController::class, 'edit'])->name('seller.edit');
Route::put('/seller/{id}', [SellerController::class, 'update'])->name('seller.update');
Route::delete('/seller/{id}/destroy', [SellerController::class, 'destroy'])->name('seller.destroy');

Route::get('/sale', [SaleController::class, 'index'])->name('sale.index');
Route::get('/sale/create', [SaleController::class, 'create'])->name('sale.create');
Route::get('/sale/{id}', [SaleController::class, 'show'])->name('sale.show');
Route::post('/sale', [SaleController::class, 'store'])->name('sale.store');
Route::get('/sale/{id}/edit', [SaleController::class, 'edit'])->name('sale.edit');
Route::put('/sale', [SaleController::class, 'update'])->name('sale.update');
Route::delete('/sale/{id}/destroy', [SaleController::class, 'destroy'])->name('sale.destroy');

Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::get('/product/{id}', [ProductController::class, 'show'])->name('product.show');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{id}/destroy', [ProductController::class, 'destroy'])->name('product.destroy');
