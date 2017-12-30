<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartiesTable extends Migration
{
    public function up()
    {
        Schema::create('party', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->comment('ユーザーid(主催者)');
            $table->string('title', 255)->comment('タイトル');
            $table->string('description', 255)->comment('詳細');
            $table->integer('status')->comment('状態');
            $table->dateTime('start_at')->nullable()->comment('開始日時');
            $table->dateTime('deleted_at')->nullable()->comment('削除日時');
            $table->nullableTimestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('party');
    }
}