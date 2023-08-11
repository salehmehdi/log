<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Size;
use App\Models\Color;

class Color extends Model
{
    use HasFactory;
    
    protected $table = 'colors';
    protected $guarded = [];

    public function product()
    {
        return $this->BelongsTo(Product::class);
    }
   
    public function size()
    {
        return $this->hasMany(Size::class);
    }
}
