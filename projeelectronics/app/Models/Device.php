<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Electronic;
use App\Models\stock;

class Device extends Model
{
    use HasFactory;
    protected $table='smart_devices';
    protected $guarded=[];

    public function electronics()
    {
        return $this->hasMany(Electronic::class);
    }
    
    public function stocks()
    {
        return $this->hasMany(Stock::class);
    }
}
