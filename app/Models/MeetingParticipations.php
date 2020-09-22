<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingParticipations extends Model
{
    use HasFactory;

    public function rider()
    {
        return $this->belongsTo(Riders::class, 'rider_id', 'id');
    }

    public function meeting()
    {
        return $this->belongsTo(Meetings::class, 'meeting_id', 'id');
    }
}
