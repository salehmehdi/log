<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Memories;

class Memories extends Model
{
    use HasFactory;
    protected $table='memories';
    protected $guarded=[];

    public function stocks()
    {
        return $this->hasMany(Memories::class);
    }
}
