<?php namespace Snprpc\Activity\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;

class CreateActivitiesTable extends Migration
{

    public function up()
    {
        Schema::create('snprpc_activity_activities', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('activity_title')->nullable();
            $table->string('activity_slug')->index();
            $table->date('activity_start_time')->nullable();
            $table->date('activity_stop_time')->nullable();
            $table->text('activity_excerpt')->nullable();
            $table->longText('activity_content')->nullable();
            $table->longText('activity_content_html')->nullable();
            $table->timestamps();
        });

    }

    public function down()
    {
        Schema::dropIfExists('snprpc_activity_activities');
    }

}
