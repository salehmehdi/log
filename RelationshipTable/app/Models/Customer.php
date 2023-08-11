<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $guarded=[];

    public function product() 
    {
        return $this->hasMany(Product::class,'customer_id','id');
    }
}
