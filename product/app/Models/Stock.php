<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Size;

class Stock extends Model
{
    use HasFactory;
   
    protected $table = 'stocks';
    protected $guarded = [];

    public function size()
    {
        return $this->BelongsTo(Size::class);
    }
}
