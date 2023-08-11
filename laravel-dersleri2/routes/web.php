<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Articles;
use App\Http\Controllers\Authors;

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
Route::get('/create',[Authors::class,'create']);
Route::get('/add',[Authors::class,'add']);
Route::get('/update',[Authors::class,'update']);
Route::get('/read',[Authors::class,'read']);
