<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicAdditionalAnswer extends Model
{
    //
    protected $table = 'tic_additional_answer';
    public $timestamps = true;
    public $incrementing = false; // since primary key is not auto-incrementing
    protected $primaryKey = 'additional_answer_id';

    protected $guarded = [];
}
