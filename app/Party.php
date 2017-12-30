<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Party extends Authenticatable
{
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
