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
 * @property int $emoticon_id
 * @property int $user_id
 * @property string $describe
 * @property string $url
 * @property string $file_suffix
 * @property int $file_size
 * @property \Carbon\Carbon $created_at
 */
class EmoticonDetail extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'emoticon_details';

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
    protected $casts = ['id' => 'integer', 'emoticon_id' => 'integer', 'user_id' => 'integer', 'file_size' => 'integer', 'created_at' => 'datetime'];
}
