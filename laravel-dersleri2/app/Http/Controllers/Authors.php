<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\author;
use App\Models\Article;

class Authors extends Controller
{
   public function add(){
    $author_id=6;
    $title="modern muhasebe islemleri";
    $comment="kullanilacak olan muhasebe programlarina ornek..";
    $author=author::findOrFail($author_id);
    
    $article=new Article([
     'author_id'=>$author_id,
     'title'=>$title,
     'comment'=>$comment,
     
    ]);
    $author->article()->save($article);
   }

   public function update(){
    $id=2;
    $title="yapay zeka";
    $comment="kemdisi birebir tam bir yapay zeka..";
    Article::where('id',$id)->update([
        'title'=>$title,
        'comment'=>$comment, 
    ]);
   }
   public function read(){
    $author_id=6;
    $author=author::findOrFail($author_id);
    $data= $author->Article->comment;
    
    return $data;

    
   }

  
}
