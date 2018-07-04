<?php namespace Snprpc\BlogAuthor\Components;

use BackendAuth;
use Cms\Classes\Page;
use Cms\Classes\ComponentBase;
use Snprpc\BlogAuthor\Models\Author as BlogAuthor;
use RainLab\Blog\Models\Post as BlogPost;
class Author extends ComponentBase
{

    public $author;

    public $authorBlogs;

    public function componentDetails()
    {
        return [
            'name'        => 'snprpc.blogauthor::lang.settings.author_title',
            'description' => 'snprpc.blogauthor::lang.settings.author_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'pen_name' => [
                'title'       => 'snprpc.activity::lang.settings.activity_slug',
                'description' => 'snprpc.activity::lang.settings.activity_slug_description',
                'default'     => '{{ :author_pen_name }}',
                'type'        => 'string'
            ],
        ];
    }

    public function onRun()
    {
        $this->author = $this->page['author'] = $this->loadAuthor();
        $this->authorBlogs = $this->page['authorBlogs'] = $this->loadAuthorBlogs();
    }

    protected function loadAuthor()
    {
        $author_pen_name = $this->property('pen_name');
        $activity = new BlogAuthor;

        $author = $author->where('pen_name', $author_pen_name)->first();

        return $author;
    }

    protected function loadAuthorBlogs()
    {
        
    }


}
