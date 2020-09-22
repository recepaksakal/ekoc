<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meetings extends Model
{
    use HasFactory;

    public function participation()
    {
        return $this->hasOne(MeetingParticipation::class, 'id', 'meeting_id');
    }
}
