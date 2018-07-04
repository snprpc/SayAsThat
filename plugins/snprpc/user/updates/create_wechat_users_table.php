<?php namespace Snprpc\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateWechatUsersTable extends Migration
{

    public function up()
    {
        Schema::create('snprpc_wechat_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('user_id')->nullable()->unsigned();
            $table->tinyInteger('subscribe');
            $table->string('openid');
            $table->string('nickname');
            $table->tinyInteger('sex');
            $table->string('city');
            $table->string('country');
            $table->string('province');
            $table->string('language');
            $table->string('headimgurl');
            $table->string('subscribe_time');
            $table->timestamps();
            $table->foreign('user_id')
                ->references('user_id')
                ->on('snprpc_users');
        });
    }

    public function down()
    {
        Schema::dropIfExists('snprpc_wechat_users');
    }

}
