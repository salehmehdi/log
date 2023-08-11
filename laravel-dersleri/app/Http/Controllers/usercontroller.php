<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function show(){
        return view('users.show');
    }
    public function create(){
        return view('users.create');
    }
}
