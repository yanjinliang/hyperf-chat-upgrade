<?php

declare(strict_types=1);
/**
 *
 * This file is part of the My App.
 *
 * Copyright CodingHePing 2016-2020.
 *
 * This is my open source code, please do not use it for commercial applications.
 *
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code
 *
 * @author CodingHePing<847050412@qq.com>
 * @link   https://github.com/codingheping/hyperf-chat-upgrade
 */
namespace App\Model;

/**
 * @property int $id
 * @property int $record_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 */
class ChatRecordsDelete extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'chat_records_delete';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'record_id', 'user_id', 'created_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'record_id' => 'integer', 'user_id' => 'integer', 'created_at' => 'datetime'];
}
