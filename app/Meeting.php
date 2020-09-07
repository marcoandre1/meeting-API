<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    /**
     * The users that belong to the meeting.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
