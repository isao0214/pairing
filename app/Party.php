<?php

namespace App;

use App\Poll;
use App\Traits\PartyObservable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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

    public function polls()
    {
        return $this->hasMany('App\Poll');
    }

    public static function andPollsCreate ($params)
    {
        DB::beginTransaction();
        try {
            $party = self::create($params->party);
            foreach ($params->userIds as $userId) {
                Poll::create(['user_id' => $userId, 'party_id' => $party->id]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

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

    public function displayStatus()
    {
        // ToDo: 定数から論理名を返す
        $displayStatus = $this->status;
        return $displayStatus;
    }

    public function displayStartAt()
    {
        // ToDo: Carbonでフォーマットした日時を返す
        $displayStartAt = $this->start_at;
        return $displayStartAt;
    }
}
