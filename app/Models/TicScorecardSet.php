<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicScorecardSet extends Model
{
     protected $table = 'tic_scorecard_set';
    protected $primaryKey = 'scorecard_set_id';
     public $timestamps = true;

    protected $guarded = [];
}
