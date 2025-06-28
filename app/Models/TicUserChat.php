<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserChat extends Model
{
    protected $table = 'tic_user_chats';
    protected $primaryKey = 'chat_id';
    public $timestamps = true;

    protected $guarded = [];
}
