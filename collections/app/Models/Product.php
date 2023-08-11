<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $guarded=[];

    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
