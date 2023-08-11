<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;
use App\Models\Comment;

class Author extends Model
{
    use HasFactory;
    protected $table='authors';
    protected $guarded=[];


    public function article()
    {
        return $this->hasMany(Article::class,'author_id','id');
    }
}
