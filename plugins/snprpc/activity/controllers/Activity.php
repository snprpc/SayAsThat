<?php namespace Snprpc\Activity\Controllers;

use Flash;
use Redirect;
use BackendMenu;
use Backend\Classes\Controller;
use ApplicationException;
use Snprpc\Activity\Models\Activity as Activities;

class Activity extends Controller
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

        BackendMenu::setContext('Snprpc.Activity', 'activity', 'activity');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $activityId) {
                if ((!$activity = Activities::find($activityId))) {
                    continue;
                }
                $activity->delete();
            }
            Flash::success('Successfully deleted those activities.');
        }
        return $this->listRefresh();
    }

    public function index()
    {

        $this->asExtension('ListController')->index();
    }

    public function create()
    {
        BackendMenu::setContextSideMenu('new_activity');

        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');

        return $this->asExtension('FormController')->create();
    }

    public function update($recordId = null)
    {
        $this->bodyClass = 'compact-container';
        $this->addCss('/plugins/rainlab/blog/assets/css/rainlab.blog-preview.css');
        $this->addJs('/plugins/rainlab/blog/assets/js/post-form.js');

        return $this->asExtension('FormController')->update($recordId);
    }

    public function onRefreshPreview()
    {
        $data = post('Activity');
        $previewHtml = Activities::formatHtml($data['activity_content'], true);
        return [
            'preview' => $previewHtml
        ];
    }


}
