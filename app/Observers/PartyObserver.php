<?php

namespace App\Observers;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class PartyObserver
{
    public function creating(Model $party)
    {
        $party->setUserId();
        $party->setRandomId();
    }
}