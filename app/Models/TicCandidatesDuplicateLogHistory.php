<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesDuplicateLogHistory extends Model
{
    //
    protected $table      = 'tic_candidates_duplicate_log_history';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'duplicate_id';

    protected $guarded = [];
}
