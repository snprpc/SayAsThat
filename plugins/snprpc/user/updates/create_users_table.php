<?php namespace Snprpc\User\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateUsersTable extends Migration
{

    public function up()
    {
        Schema::create('snprpc_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_tel')->unique();
            $table->string('user_passwd');
            $table->timestamp('last_login')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('snprpc_users');
    }

}
