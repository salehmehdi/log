<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article;

class author extends Model
{
    use HasFactory;
    protected $table="author";
    protected $guarded=[];
    public function article(){
    return $this->hasOne(Article::class);
  }
}
