<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;

class Teacher extends Model
{
    use HasFactory;
    protected $table='teachers';
    protected $guarded=[];
   
    public function subject(){
        return $this->BelongsTo(subject::class);
    }
}
