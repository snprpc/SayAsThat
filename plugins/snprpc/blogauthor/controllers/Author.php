<?php namespace Snprpc\BlogAuthor\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Snprpc\BlogAuthor\Models\Author as BlogAuthor;
use Flash;

class Author extends Controller
{

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
        // 'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    // public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('RainLab.Blog', 'blog', 'authors');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $authorId) {
                if ((!$author = Author::find($authorId)))
                    continue;
                $author->delete();
            }
            Flash::success('Successfully deleted those categories.');
        }
        return $this->listRefresh();
    }
}
