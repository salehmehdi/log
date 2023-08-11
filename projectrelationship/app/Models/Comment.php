<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Author;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';
    protected $guarded=[];

    public function article()
    {
       return $this->belongsTo(Article::class,'article_id','id');
    }
}
