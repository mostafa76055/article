<?php
/**
 * Class Badge
 *
 * @category Worketic
 *
 * @package Worketic
 * @author  Amentotech <theamentotech@gmail.com>
 * @license http://www.amentotech.com Amentotech
 * @link    http://www.amentotech.com
 */

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use File;
use Storage;

/**
 * Class Badge
 *
 */
class Comment extends Model
{
    public $table = 'article_comments';
    protected $fillable = ['article_id','tagged_name','index','comment','user_id','color','read'];
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    } 
    public function article()
    {
        return $this->belongsTo(\App\Models\Article::class,'article_id','id');
    }

}
