<?php namespace Snprpc\BlogAuthor\Updates;

use October\Rain\Database\Updates\Migration;
use Schema;
use System\Classes\PluginManager;
use Illuminate\Support\Facades\DB;

class AddAuthorColumnForBlog extends Migration
{

    private $dbType;

    public function up()
    {
        if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
        {
            $this->dbType = DB::connection()->getPdo()->getAttribute(\PDO::ATTR_DRIVER_NAME);

            Schema::table('rainlab_blog_posts', function ($table) {
                $this->dbSpecificSetup($table);
                $table->integer('author_id')->nullable()->unsigned()->index()->after('user_id');
                $table->foreign('author_id')
                    ->references('author_id')
                    ->on('snprpc_blogauthor_authors');
            });
        }
    }

    public function down()
    {
        if(PluginManager::instance()->hasPlugin('RainLab.Blog'))
        {
            Schema::table('rainlab_blog_posts',function($table){
                $table->dropForeign('rainlab_blog_posts_author_id_foreign');
                $table->dropColumn('author_id');

            });
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
