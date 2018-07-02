<?php namespace Snprpc\Activity\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use Snprpc\Activity\Models\Category as Categories;

class Category extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Snprpc.Activity', 'activity', 'category');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $categoryId) {
                if ((!$category = Categories::find($categoryId))) {
                    continue;
                }
                $category->delete();
            }
            Flash::success(trans('snprpc.activity::lang.list.delete_success'));
        }
        return $this->listRefresh();
    }
}
