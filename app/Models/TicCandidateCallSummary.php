<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidateCallSummary extends Model
{
    //
    protected $table      = 'tic_candidate_call_summary';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'r_summary_id';

    protected $guarded = [];
}
