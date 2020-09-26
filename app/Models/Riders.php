<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riders extends Model
{
    use HasFactory;

    protected $with = ["identity", "contact", "emergency", "r_level", "r_mission", "motorcycles"];

    public function identity()
    {
        return $this->hasOne(Identities::class, 'rider_id', 'id');
    }

    public function contact()
    {
        return $this->hasOne(Contacts::class, 'rider_id', 'id');
    }

    public function r_level()
    {
        return $this->hasOne(Levels::class, 'id', 'level');
    }

    public function m_participation()
    {
        return $this->hasOne(MeetingsParticipations::class, 'rider_id', 'id');
    }

    public function r_participation()
    {
        return $this->hasOne(RouteParticipation::class, 'rider_id', 'id');
    }

    public function motorcycles()
    {
        return $this->hasMany(Motorcycles::class, 'rider_id', 'id');
    }

    public function emergency()
    {
        return $this->hasMany(Emergencies::class, 'rider_id', 'id');
    }

    public function dates()
    {
        return $this->hasMany(Dates::class, 'rider_id', 'id');
    }

    public function r_mission()
    {
        return $this->hasMany(Missions::class, 'id', 'mission');
    }

    
}
