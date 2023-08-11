<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authorscontroller;

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
    return view("welcome");
});

Route:: get('/created', [Authorscontroller::class,'created']);
Route:: get('/guncelle', [Authorscontroller::class,'guncelle']);
Route:: get('/status_guncelle', [Authorscontroller::class,'status_guncelle']);
Route:: get('/deleted', [Authorscontroller::class,'deleted']);
Route:: get('/order_list', [Authorscontroller::class,'order_list']);
Route::get('/get-authors',[Authorscontroller::class,'getAuthors'] );
