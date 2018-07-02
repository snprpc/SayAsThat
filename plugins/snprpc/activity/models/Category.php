<?php namespace Snprpc\Activity\Models;

use Config;
use Model;
use RainLab\Blog\Classes\TagProcessor;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'snprpc_activity_categories';

    public $belongsToMany = [
        'activity' => [
            'Snprpc\Activity\Models\Activity',
            'table'    => 'snprpc_activity_avts_cegs',
            'order'    => 'activity_title'
        ]
    ];

    public $rules = [
        'category_name' => 'required',
        'category_slug' => 'required|between:3,64|unique:snprpc_activity_categories',
    ];



    public function afterDelete()
    {
        $this->activity()->detach();
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {
            foreach ($checkedIds as $categoryId) {
                if ((!$category = Category::find($categoryId)))
                    continue;
                $category->delete();
            }
            Flash::success('Successfully deleted those categories.');
        }
        return $this->listRefresh();
    }

}
