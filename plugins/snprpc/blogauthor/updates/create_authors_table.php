<?php namespace Snprpc\BlogAuthor\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;
use System\Classes\PluginManager;
use Illuminate\Support\Facades\DB;

class CreateAuthorsTable extends Migration
{

    private $dbType;

    public function up()
    {
        if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
        {
            $this->dbType = DB::connection()->getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME);

            Schema::create('snprpc_blogauthor_authors', function($table)
            {
                $this->dbSpecificSetup($table);
                $table->increments('author_id');
                $table->string('author_real_name')->nullable();
                $table->string('author_pen_name')->nullable();
                $table->string('author_weixin_code')->nullable();
                $table->string('author_tel')->nullable()->index();
                $table->string('author_email')->nullable()->index();
                $table->string('author_identity')->nullable();
                $table->string('author_address')->nullable();
                $table->string('author_description')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down()
    {
        if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
        {
            Schema::dropIfExists('snprpc_blogauthor_authors');
        }
    }
    private function dbSpecificSetup(&$table)
    {
        switch ($this->dbType) {
            case 'pgsql':
                break;
            case 'mysql':
                //@todo SET sql_mode='ANSI_QUOTES';
                $table->engine = 'InnoDB';
                break;
        }
    }

}
