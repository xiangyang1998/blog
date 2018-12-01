<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                       /*评论表*/
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('article_id')->comment('对应的的文章id');
            $table->string('comment_content')->comment('评论的内容');
            $table->string('name')->default('匿名')->comment('评论者用户名');
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
        Schema::dropIfExists('comments');
    }
}
