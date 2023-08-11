<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Color;
use App\Models\Stock;

class Size extends Model
{
    use HasFactory;
   
    protected $table = 'sizes';
    protected $guarded = [];

    public function ColorSize()
    {
        return $this->BelongsTo(Color::class);
    }
   
   
    public function SizeStock()
    {
        return $this->hasMany(Stock::class);
    }

}
