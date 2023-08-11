<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Comment;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $guarded=[];

    public function customer() 
    {
        return $this->belongsTo(Customer::class,'customer_id','id');
    }

    public function comment()
     {
        return $this->hasMany(Comment::class,'product_id','id');
    }
}
