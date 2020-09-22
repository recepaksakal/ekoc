<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riders extends Model
{
    use HasFactory;

    public function identity()
    {
        return $this->hasOne(Identities::class, 'id', 'rider_id');
    }

    public function contact()
    {
        return $this->hasOne(Contacts::class, 'id', 'rider_id');
    }

    public function level()
    {
        return $this->hasOne(Levels::class, 'level', 'id');
    }

    public function m_participation()
    {
        return $this->hasOne(MeetingsParticipations::class, 'id', 'rider_id');
    }

    public function r_participation()
    {
        return $this->hasOne(RouteParticipation::class, 'id', 'rider_id');
    }

    public function motorcycles()
    {
        return $this->hasMany(Motorcycles::class, 'id', 'rider_id');
    }

    public function emergencies()
    {
        return $this->hasMany(Emergencies::class, 'id', 'rider_id');
    }

    public function dates()
    {
        return $this->hasMany(Dates::class, 'id', 'rider_id');
    }

    public function missions()
    {
        return $this->hasMany(Missions::class, 'mission', 'id');
    }

    
}
