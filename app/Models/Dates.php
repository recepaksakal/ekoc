<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dates extends Model
{
    use HasFactory;

    public function rider()
    {
        return $this->belongsTo(Riders::class, 'rider_id', 'id');
    }

    public function level()
    {
        return $this->hasOne(Levels::class, 'level', 'id');
    }

}
