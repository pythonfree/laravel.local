<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models
 *
 * @property int $id
 * @property string $title
 * @property string $content
 */
class Article extends Model
{
    protected $table = 'news';
}