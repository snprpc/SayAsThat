<?php namespace Snprpc\User\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Snprpc\User\Models\User;
use Flash;

class Users extends Controller
{

    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
        // 'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Snprpc.User', 'user', 'users');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $userId) {
                if ((!$user = User::find($userId)))
                    continue;
                $user->delete();
            }
            Flash::success(trans('snprpc.user::lang.list.delete_success'));
        }
        return $this->listRefresh();
    }
}
