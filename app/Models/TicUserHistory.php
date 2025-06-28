<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserHistory extends Model
{
    protected $table = 'tic_user_history';
    protected $primaryKey = 'user_history_id';
    public $timestamps = true;

    protected $guarded = [];
}
