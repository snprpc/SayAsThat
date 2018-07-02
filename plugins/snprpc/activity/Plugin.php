<?php namespace Snprpc\Activity;

use Backend;
use Config;
use Event;
use System\Classes\PluginBase;

/**
 * BlogTags Plugin Information File
 */
class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'snprpc.activity::lang.plugin.name',
            'description' => 'snprpc.activity::lang.plugin.description',
            'author'      => 'Snprpc',
            'icon'        => 'icon-map'
        ];
    }

    public function registerComponents()
    {
        // return [
        //     // 'RainLab\Blog\Components\Post'       => 'blogPost',
        //     // 'RainLab\Blog\Components\Posts'      => 'blogPosts',
        //     // 'RainLab\Blog\Components\Categories' => 'blogCategories',
        //     // 'RainLab\Blog\Components\RssFeed'    => 'blogRssFeed'
        // ];
    }

    public function registerNavigation()
    {
        return [
            'activity' => [
                'label'       => 'snprpc.activity::lang.plugin.menu_label',
                'url'         => Backend::url('snprpc/activity/activity'),
                'icon'        => 'icon-map',
                'order'       => 500,

                'sideMenu' => [
                    'new_activity' => [
                        'label'       => 'snprpc.activity::lang.plugin.new_activity',
                        'icon'        => 'icon-plus',
                        'url'         => Backend::url('snprpc/activity/activity/create')
                    ],
                    'activity' => [
                        'label'       => 'snprpc.activity::lang.plugin.activity',
                        'icon'        => 'icon-map',
                        'url'         => Backend::url('snprpc/activity/activity'),
                    ],
                    'categories' => [
                        'label'       => 'snprpc.activity::lang.plugin.category',
                        'icon'        => 'icon-list-ul',
                        'url'         => Backend::url('snprpc/activity/category'),
                    ]

                ]
            ]
        ];
    }


}
