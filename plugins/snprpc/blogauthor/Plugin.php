<?php namespace Snprpc\BlogAuthor;

use Backend;
use Bedard\BlogTags\Models\Tag;
use Config;
use Event;
use System\Classes\PluginBase;
use RainLab\Blog\Controllers\Posts as PostsController;
use RainLab\Blog\Models\Post as PostModel;
use Snprpc\BlogAuthor\Models\Author as BlogAuthor;

/**
 * BlogTags Plugin Information File
 */
class Plugin extends PluginBase
{

    public $require = ['RainLab.Blog'];

    public function pluginDetails()
    {
        return [
            'name'        => 'snprpc.blogauthor::lang.plugin.name',
            'description' => 'snprpc.blogauthor::lang.plugin.description',
            'author'      => 'Snprpc',
            'icon'        => 'icon-address-card-o'
        ];
    }

    public function registerComponents()
    {
        return [
            'Snprpc\BlogAuthor\Components\Author'   =>  'blogAuthor',
        ];
    }

    public function boot()
    {
        // extend the blog navigation
        Event::listen('backend.menu.extendItems', function($manager) {
           $manager->addSideMenuItems('RainLab.Blog', 'blog', [
                'author' => [
                    'label' => 'snprpc.blogauthor::lang.navigation.authors',
                    'icon'  => 'icon-address-card-o',
                    'code'  => 'author',
                    'owner' => 'RainLab.Blog',
                    'url'   => Backend::url('snprpc/blogauthor/author')
                ]
            ]);
        });

        // extend the post model
        PostModel::extend(function($model) {
            $model->belongsTo['author'] = [
                'Snprpc\BlogAuthor\Models\Author',
                'key'   =>  'author_id',
                'order' =>  'author_pen_name'
            ];
        });

        // Extend all backend list usage
        Event::listen('backend.list.extendColumns', function($widget) {
            // Only for the User model
            if (!$widget->model instanceof PostModel) {
                return;
            }
            $widget->addColumns([
               'author' => [
                     'label'        =>  'snprpc.blogauthor::lang.list.pen_name',
                     'relation'     =>  'author',
                     'select'       =>  'author_pen_name',
                     'searchable'   =>  'true'
               ]
           ]);
        });
        // extend the post form
        PostsController::extendFormFields(function($form, $model, $context) {
            if (!$model instanceof PostModel) {
                return;
            }
            $form->addSecondaryTabFields([
                'author' => [
                    'tab' => 'snprpc.blogauthor::lang.form.tab_author',
                    'placeholder' => 'snprpc.blogauthor::lang.form.pen_name_placeholder',
                    'commentAbove' => 'snprpc.blogauthor::lang.form.pen_name',
                    'type' => 'relation',
                    'select' => 'author_pen_name',
                    'span' => 'left'
                ]
            ]);
        });



    }

}
