<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Colors;

class Product extends Model
{
    use HasFactory;
   
    protected $table='products';
    protected $guarded=[];

    public function color()
    {
        return $this->hasMany(Color::class,);
    }
}
