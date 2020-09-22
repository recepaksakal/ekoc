<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identities extends Model
{
    use HasFactory;

    public function rider()
    {
        return $this->belongsTo(Riders::class, 'rider_id', 'id');
    }

    public function blood()
    {
        return $this->hasOne(Bloods::class, 'blood', 'id');
    }

    public function marital()
    {
        return $this->hasOne(Maritals::class, 'marital_status', 'id');
    }
}
