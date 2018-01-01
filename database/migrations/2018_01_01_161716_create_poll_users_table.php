<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePollUsersTable extends Migration
{
    public function up()
    {
        Schema::create('poll_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('ユーザーid');
            $table->integer('poll_id')->comment('ポールid');
            $table->integer('priority')->comment('優先度');
            $table->integer('status')->nullable()->comment('状態');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
            $table->nullableTimestamps();

            $table->index('user_id', 'polls_user_id_index');
            $table->index('poll_id', 'polls_party_id_index');
        });
    }

    public function down()
    {
        Schema::dropIfExists('poll_users');
    }
}
