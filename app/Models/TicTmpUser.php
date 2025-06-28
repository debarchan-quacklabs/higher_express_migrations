<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTmpUser extends Model
{
     protected $table = 'tic_tmp_user';
    protected $primaryKey = 'tmp_id';
    public $timestamps = true;

    protected $guarded = [];
}
