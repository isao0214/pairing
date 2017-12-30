<?php

namespace App;

use App\Traits\PartyObservable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class Party extends Authenticatable
{
    use PartyObservable;

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

    public function setUserId()
    {
        $user = Auth::user();
        $this->user_id = $user->id;
    }
}
