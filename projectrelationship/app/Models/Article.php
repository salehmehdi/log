<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comment;
use App\Models\Author;

class Article extends Model
{
    use HasFactory;
     protected $table='articles';
     protected $guarded=[];

     public function author()
     {
        return $this->belongsTo(Author::class,'author_id','id');
     }

     public function comment()
     {
        return $this->hasMany(Comment::class,'article_id','id');
     }
}
