<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollsTable extends Migration
{
    public function up()
    {
        Schema::create('polls', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('ユーザーid(参加者)');
            $table->integer('party_id')->comment('パーティーid');
            $table->integer('first_choice_user_id')->nullable()->comment('ユーザーid(第一希望)');
            $table->integer('second_choice_user_id')->nullable()->comment('ユーザーid(第二希望)');
            $table->integer('third_choice_user_id')->nullable()->comment('ユーザーid(第三希望)');
            $table->integer('status')->comment('状態');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
            $table->nullableTimestamps();

            $table->unique(['user_id', 'party_id'], 'UNIQUE');
            $table->index('user_id');
            $table->index('party_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('polls');
    }
}
