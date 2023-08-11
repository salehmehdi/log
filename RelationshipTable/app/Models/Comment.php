<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Comment extends Model
{
    use HasFactory;
    protected $table='comments';
    protected $guarded=[];

    public function proudct()
    {
        return $this->belongsTo(Product::class,'product_id','id');
    }
}
