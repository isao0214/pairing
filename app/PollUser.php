<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class PollUser extends Authenticatable
{
    protected $fillable = [
        'user_id',
        'poll_id',
        'priority',
        'status',
        'deleted_at',
    ];
}
