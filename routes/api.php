<?php

use App\Http\Controllers\WarehouseController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductMovementController;

Route::get('/warehouses', [WarehouseController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/orders', [OrderController::class, 'index']);
Route::post('/orders', [OrderController::class, 'store']);
Route::put('/orders/{order}', [OrderController::class, 'update']);
Route::patch('/orders/{order}/complete', [OrderController::class, 'complete']);
Route::patch('/orders/{order}/cancel', [OrderController::class, 'cancel']);
Route::patch('/orders/{order}/resume', [OrderController::class, 'resume']);
Route::get('/product-movements', [ProductMovementController::class, 'index']);
