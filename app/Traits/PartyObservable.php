<?php

namespace App\Traits;

use App\Observers\PartyObserver;
use Illuminate\Database\Eloquent\Model;

trait PartyObservable
{
    public static function bootPartyObservable()
    {
        self::observe(PartyObserver::class);
    }
}
