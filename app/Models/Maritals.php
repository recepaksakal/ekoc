<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maritals extends Model
{
    use HasFactory;

    public function identity()
    {
        return $this->belongsTo(Identities::class, 'id', 'marital_status');
    }
}
