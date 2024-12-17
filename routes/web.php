<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\abcd::class, 'Home']);
Route::get('about', [App\Http\Controllers\abcd::class, 'About']);
Route::get('main', [App\Http\Controllers\abcd::class, 'Main']);

