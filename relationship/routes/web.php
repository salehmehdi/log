<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Subjectcontroller;

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
Route::get('/store',[Subjectcontroller::class,'store']);
Route::get('/index',[Subjectcontroller::class,'index']);
Route::get('/show',[Subjectcontroller::class,'show']);
