<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RouteParticipations extends Model
{
    use HasFactory;
    
    public function rider()
    {
        return $this->belongsTo(Riders::class, 'rider_id', 'id');
    }

    public function route()
    {
        return $this->belongsTo(Routes::class, 'route_id', 'id');
    }
}
