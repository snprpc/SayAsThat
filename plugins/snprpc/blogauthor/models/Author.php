<?php namespace Snprpc\BlogAuthor\Models;

use Config;
use Model;
use RainLab\Blog\Models\Post;

/**
 * Tag Model
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'snprpc_blogauthor_authors';

    protected $primaryKey = 'author_id';

    public $hasMany = [
        'posts' => [
            'RainLab\Blog\Models\Post',
            'order' => 'published_at desc',
            'scope' => 'isPublished'
        ]
    ];

    public $rules = [
        'author_real_name'     =>  'required',
        'author_pen_name'      =>  'required|unique:snprpc_blogauthor_authors',
        'author_weixin_code'   =>  'required|unique:snprpc_blogauthor_authors',
        'author_tel'           =>  'required|unique:snprpc_blogauthor_authors',
        'author_identity'      =>  'required',
        'author_address'       =>  'required',
    ];

    public $attachMany = [
        'author_header'            =>  ['System\Models\File']
    ];

    public $customMessages = [
        // 'name.required' => 'bedard.blogtags::lang.form.name_required',
        // 'name.unique'   => 'bedard.blogtags::lang.form.name_unique',
        // 'name.regex'    => 'bedard.blogtags::lang.form.name_invalid',
    ];

    static public function listAuthot()
    {
        return ['123','123'];
    }


}
