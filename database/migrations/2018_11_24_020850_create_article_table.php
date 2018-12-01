<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                   /*文章表*/
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->comment('文章标题');
            $table->string('article')->comment('文章正文');
            $table->string('describe')->comment('文章描述');
            $table->string('keywords')->comment('文章关键字');
            $table->string('tags')->comment('文章标签');
            $table->string('titlepic')->comment('文章图片');
            $table->integer('category')->comment('文章所属栏目');
            $table->string('img')->nullable()->comment('存放多张图片');
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
        Schema::dropIfExists('articles');
    }
}
