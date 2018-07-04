<?php namespace Snprpc\User;

use Backend;
use Config;
use Event;
use System\Classes\PluginBase;


class Plugin extends PluginBase
{

    public function pluginDetails()
    {
        return [
            'name'        => 'snprpc.user::lang.plugin.name',
            'description' => 'snprpc.user::lang.plugin.description',
            'author'      => 'Snprpc',
            'icon'        => 'icon-user'
        ];
    }

    public function registerComponents()
    {
        return [
            // 'Snprpc\BlogAuthor\Components\Author'   =>  'blogAuthor',
        ];
    }

    public function registerNavigation()
    {
        return [
            'user' => [
                'label'       => 'snprpc.user::lang.plugin.label',
                'url'         => Backend::url('snprpc/user/users'),
                'icon'        => 'icon-user',
                'order'       => 500,
            ]
        ];
    }


}
