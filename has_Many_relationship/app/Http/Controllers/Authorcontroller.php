<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Article;

class Authorcontroller extends Controller
{
    public function request(){
        Author::create([
            'name' => 'melih',
            'status' => 0,
            'profession' => 'Manager',
        ]);
        Article::create([
            'title' => 'dijital pazarlama',
            'content' => 'modern reklamcilik teknikleri',
            'author_Id' => 4,
        ]);
    }
}
