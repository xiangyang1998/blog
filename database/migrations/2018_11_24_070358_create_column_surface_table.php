<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnSurfaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                        /*栏目表*/
        Schema::create('column_surfaces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('column')->comment('栏目名称');
            $table->string('column_another_name')->comment('栏目别名');
            $table->string('keyword')->comment('栏目关键字');
            $table->string('describe')->comment('栏目描述');
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
        Schema::dropIfExists('column_surfaces');
    }
}
