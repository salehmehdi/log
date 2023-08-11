<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Memories;
use App\Models\Device;

class Electronic extends Model
{
    use HasFactory;
    protected $table='electronics';
    protected $guarded=[];

    public function devices()
    {
        return $this->BelongsTo(Device::class);
    }
   
    public function memories()
    {
        return $this->hasMany(Memories::class);
    }


}
