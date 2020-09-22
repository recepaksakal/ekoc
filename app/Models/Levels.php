<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Levels extends Model
{
    use HasFactory;

    public function rider()
    {
        return $this->belongsTo(Riders::class, 'id', 'level');
    }

    public function date()
    {
        return $this->belongsTo(Dates::class, 'id', 'level');
    }
}
