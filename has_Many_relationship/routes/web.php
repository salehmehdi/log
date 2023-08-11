<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorcontroller;
use App\Http\Controllers\AuthorArticle;

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
Route::get('/request',[Authorcontroller::class,'request']);
Route::get('/index',[AuthorArticle::class,'index']);
Route::get('/show',[AuthorArticle::class,'show']);
