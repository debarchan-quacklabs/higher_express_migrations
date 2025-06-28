<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesHistory extends Model
{
    //
    protected $table = 'tic_candidates_history';
    public $timestamps = true;
    public $incrementing = false;
    protected $primaryKey = 'candidate_history_id';

    protected $guarded = [];
}
