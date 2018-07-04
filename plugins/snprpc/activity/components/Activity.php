<?php namespace Snprpc\Activity\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Snprpc\Activity\Models\Activity as Activies;

class Activity extends ComponentBase
{

    public $activity;

    public function componentDetails()
    {
        return [
            'name'        => 'snprpc.activity::lang.settings.activity_title',
            'description' => 'snprpc.activity::lang.settings.activity_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'activity_slug' => [
                'title'       => 'snprpc.activity::lang.settings.activity_slug',
                'description' => 'snprpc.activity::lang.settings.activity_slug_description',
                'default'     => '{{ :activity_slug }}',
                'type'        => 'string'
            ],
        ];
    }

    public function onRun()
    {
        $this->activity = $this->page['activity'] = $this->loadActivity();
    }

    protected function loadActivity()
    {
        $activity_slug = $this->property('activity_slug');
        $activity = new Activies;

        $activity = $activity->where('activity_slug', $activity_slug)->first();
        // /*
        //  * Add a "url" helper attribute for linking to each category
        //  */
        // if ($post && $post->categories->count()) {
        //     $post->categories->each(function($category) {
        //         $category->setUrl($this->categoryPage, $this->controller);
        //     });
        // }

        return $activity;
    }

}
