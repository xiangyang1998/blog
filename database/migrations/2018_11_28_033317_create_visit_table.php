<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                        /*访问者纪录表*/
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fingerprint')->comment('访问者浏览器指纹');
            $table->string('article_id')->comment('访问者所访问的文章ID');
            $table->string('page')->nullable()->comment('页数存放');
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
        Schema::dropIfExists('visits');
    }
}
