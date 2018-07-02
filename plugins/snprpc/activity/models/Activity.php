<?php namespace Snprpc\Activity\Models;

use Config;
use Model;
use Markdown;
use Snprpc\Activity\Classes\TagProcessor;


class Activity extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'snprpc_activity_activities';


    protected $dates = ['activity_start_time','activity_stop_time'];
    public $rules = [
        'activity_title'     =>  'required',
        'activity_slug'      =>  ['required', 'regex:/^[a-z0-9\/\:_\-\*\[\]\+\?\|]*$/i', 'unique:snprpc_activity_activities'],
        'activity_content'   =>  'required',
        'activity_excerpt'   =>  '',
    ];
    public $preview = null;

    public $belongsToMany = [
        'activity_category' => [
            'Snprpc\Activity\Models\Category',
            'table'    => 'snprpc_activity_avts_cegs',
            'order'    => 'category_name'
        ]
    ];

    public $attachMany = [
        'activity_poster_horizontal'=>  ['System\Models\File'],
        'activity_poster_vertical'  =>  ['System\Models\File'],
        'activity_featured_image'   =>  ['System\Models\File'],
    ];


    public function beforeSave()
    {
        $this->activity_content_html = self::formatHtml($this->activity_content);
    }

    public static function formatHtml($input, $preview = false)
    {
        $result = Markdown::parse(trim($input));
        if ($preview) {
            $result = str_replace('<pre>', '<pre class="prettyprint">', $result);
        }
        $result = TagProcessor::instance()->processTags($result, $preview);
        return $result;
    }
}
