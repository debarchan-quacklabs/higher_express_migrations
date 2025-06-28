<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserDetail extends Model
{
    protected $table = 'tic_user_details';
    protected $primaryKey = 'details_id';
    public $timestamps = true;

    protected $guarded = [];
}

