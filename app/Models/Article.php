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
 *
 * @property int $rubric_id
 */
class Article extends Model
{
    protected $table = 'news';

    public function rubrics()
    {
        return $this->belongsToMany(
            Rubric::class, 'news_to_rubrics', 'rubric_id','news_id');
//            Rubric::class, 'news_to_rubrics', 'rubric_id','news_id', 'id');
    }

/*    public function rubric()
    {
        return $this->belongsTo(Rubric::class, 'rubric_id', 'id');
    }*/

}