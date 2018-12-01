<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareNoticesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                  /*公告表*/
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('公告标题');
            $table->string('text')->comment('公告正文');
            $table->string('picture_bad')->comment('公告图片地址');
            $table->string('describe')->comment('公告描述');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notices');
    }
}
