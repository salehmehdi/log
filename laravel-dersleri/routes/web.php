<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\layoucontroller;

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
/*Route::redirect('/','anasayfa');Route :: prefix('sayfalar')->group(function(){})
    
Route :: fallback(function(){
  return view('hata');
});

Route::get('/',function(){
return view('anasayfa');
});

Route::get('/kurumsal',function(){ 
    return view('kurumsal'); 
});

Route::get('/referans',function(){
    return view('referans');
});

Route::get('/iletisim',function(){
    return view('iletisim');
});*/
Route::get('/', [LayouController::class, 'mainmenu'])->name('customer');

Route::get('/about', [LayouController::class, 'about'])->name('about');

Route::get('/customers', [LayouController::class, 'customers'])->name('customers');




