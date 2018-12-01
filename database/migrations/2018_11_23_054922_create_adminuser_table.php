<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {                   /*后台管理员用户表*/
        Schema::create('admin_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('user_name','20')->comment('管理员名称');
            $table->string('user_password','30')->comment('管理员密码');
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
        Schema::dropIfExists('admin_users');
    }
}
