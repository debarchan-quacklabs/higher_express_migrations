<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicJobScorecard extends Model
{
    protected $table = 'tic_job_scorecard';
    protected $primaryKey = 'scorecard_id';
    public $timestamps = true;

    protected $guarded = [];
}
