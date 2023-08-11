<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Teacher;

class Subject extends Model
{
    use HasFactory;
    protected $table='subjects';
    protected $guarded=[];


    public function teacher(){
        return $this->hasMany(Teacher::class);
    }
}
