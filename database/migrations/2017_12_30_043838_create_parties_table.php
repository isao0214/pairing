<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    public function up()
    {
        Schema::create('parties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('random_id', 255)->comment('乱数id');
            $table->integer('user_id')->comment('ユーザーid(主催者)');
            $table->string('title', 255)->comment('タイトル');
            $table->string('description', 255)->comment('詳細');
            $table->integer('status')->comment('状態');
            $table->dateTime('start_at')->nullable()->comment('開始日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
            $table->nullableTimestamps();

            $table->unique('random_id');
            $table->index('random_id');
            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('parties');
    }
}