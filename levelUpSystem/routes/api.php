<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{SellerController, SaleController, ProductController};

Route::apiResource('sellers', SellerController::class);
Route::apiResource('sales', SaleController::class);
Route::apiResource('products', ProductController::class);
