<?php namespace Snprpc\Activity\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCategoriesTable extends Migration
{

    public function up()
    {
        Schema::create('snprpc_activity_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('category_name')->nullable();
            $table->string('category_slug')->nullable()->index();
            $table->timestamps();
        });

        Schema::create('snprpc_activity_avts_cegs', function($table)
        {
            $table->engine = 'InnoDB';
            $table->integer('activity_id')->unsigned();
            $table->integer('category_id')->unsigned();
            $table->primary(['activity_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::drop('snprpc_activity_avts_cegs');
        Schema::drop('snprpc_activity_categories');
    }

}
