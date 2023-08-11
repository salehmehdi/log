<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Productscontroller;
use App\Http\Controllers\Pricescontroller;

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
 
Route::get('/store',[Productscontroller::class,'store']);
Route::get('/create',[Pricescontroller::class,'store']);
Route::get('/index',[Productscontroller::class,'index']);
Route::get('/array',[Pricescontroller::class,'index']);