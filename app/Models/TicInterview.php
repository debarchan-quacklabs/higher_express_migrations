<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicInterview extends Model
{
    protected $table = 'tic_interviews';
    protected $primaryKey = 'interview_id';
    public $timestamps = true;

    protected $guarded = []; 
}
