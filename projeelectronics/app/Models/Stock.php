<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Device;

class Stock extends Model
{
    use HasFactory;
    protected $table='stocks';
    protected $guarded=[];

    public function memory()
    {
        return $this->belongsTo(Memories::class);
    }
    public function device()
    {
        return $this->belongsTo(Device::class);
    }
}
