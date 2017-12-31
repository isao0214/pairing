<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Poll extends Authenticatable
{
    protected $fillable = [
        'user_id',
        'party_id',
        'first_choice_user_id',
        'second_choice_user_id',
        'third_choice_user_id',
        'status',
        'deleted_at',
    ];
}
