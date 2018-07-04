<?php namespace Snprpc\User\Models;

use Config;
use Model;
use Markdown;
use Snprpc\Activity\Classes\TagProcessor;


class WechatUser extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'snprpc_wechat_users';

    public $rules = [
        // 'user_name'     =>  'required|between:2,255|unique:snprpc_users',
        // 'user_tel'      =>  'required|size:11|unique:snprpc_users'
        // 'user_passwd'   =>  'required:create|between:4,255|confirmed',
        // 'passwd_confirmation' => 'required_with:password|between:4,255',
    ];

    public $belongsTo = [
        'user' => [
            'Snprpc\User\Models\User',
        ]
    ];
}
