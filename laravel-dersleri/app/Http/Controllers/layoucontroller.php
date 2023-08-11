<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoucontroller extends Controller
{
    public function mainmenu (){
        return view('layou.mainmenu');
    }
    public function about (){
        return view('layou.about');
    }
    public function customers (){
        return view('layou.customers');
    }
}
