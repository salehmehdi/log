<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productcontroller;
use App\Http\Controllers\Colorcontroller;
use App\Http\Controllers\Sizecontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('list')->group(function () {
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/color', [ColorController::class, 'index']);
    Route::get('/size', [SizeController::class, 'index']);
});

Route::get('/show', [ProductController::class, 'show']);