<?php namespace Snprpc\User\Models;

use Config;
use Model;
use Markdown;
use Snprpc\Activity\Classes\TagProcessor;


class User extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'snprpc_users';

    protected $primaryKey = 'user_id';

    public $rules = [
        'user_name'     =>  'required|between:2,255|unique:snprpc_users',
        'user_tel'      =>  'required|size:11|unique:snprpc_users'
        'user_passwd'   =>  'required:create|between:4,255|confirmed',
        'passwd_confirmation' => 'required_with:password|between:4,255',
    ];

    public $hasOne = [
        'wechat_user' => [
            'Snprpc\User\Models\WechatUser',
        ]
    ];
}
