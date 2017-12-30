<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;


class Party extends Authenticatable
{
    protected $fillable = [
        'random_id',
        'user_id',
        'title',
        'description',
        'status',
        'start_at',
        'deleted_at',
    ];

    public function setRandomId()
    {
        $rundomId = md5(uniqid(rand(),1));
        $this->random_id = $rundomId;
    }
}
