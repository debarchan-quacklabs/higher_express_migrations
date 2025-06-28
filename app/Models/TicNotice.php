<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicNotice extends Model
{
     protected $table = 'tic_notices';
    protected $primaryKey = 'notice_id';
        public $timestamps = true;

    protected $guarded = [];
}
