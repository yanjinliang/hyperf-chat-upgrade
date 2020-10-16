<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $class_name
 * @property int $sort
 * @property int $is_default
 * @property \Carbon\Carbon $created_at
 */
class ArticleClass extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'article_class';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'sort' => 'integer', 'is_default' => 'integer', 'created_at' => 'datetime'];
}
