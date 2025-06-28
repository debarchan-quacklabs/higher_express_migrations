<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserLoginHistory extends Model
{
   protected $table = 'tic_user_login_history';
    protected $primaryKey = 'login_history_id';
    public $timestamps = true;

    protected $guarded = [];
}
