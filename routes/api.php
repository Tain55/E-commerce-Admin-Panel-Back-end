<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 

Route::get('products', [App\Http\Controllers\ProductController::class, 'ShowProducts']);
Route::post('product/update', [App\Http\Controllers\ProductController::class, 'UploadProduct']);
Route::put('product/edit/{id}', [App\Http\Controllers\ProductController::class, 'EditProduct']);
Route::delete('product/delete/{id}', [App\Http\Controllers\ProductController::class, 'DeleteProduct']);
