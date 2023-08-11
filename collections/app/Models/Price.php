<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Price extends Model
{
    use HasFactory;
    protected $table='prices';
    protected $guarded=[];

    public function products()
    {
        return $this->BelongsTo(Product::class);
    }
}
