<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;


/**
 * Class Rubric
 * @package App\Models
 *
 * @property int $id
 * @property string $title
 *
 */
class Rubric extends Model
{
    protected $table = 'rubrics';

    public function article()
    {
        return $this->hasMany(Article::class, 'rubric_id', 'id');
//        return $this->hasOne(Article::class, 'rubric_id', 'id');
    }

}