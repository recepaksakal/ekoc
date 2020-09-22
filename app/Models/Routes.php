<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Routes extends Model
{
    use HasFactory;

    public function participation()
    {
        return $this->hasOne(RouteParticipation::class, 'id', 'route_id');
    }
}
