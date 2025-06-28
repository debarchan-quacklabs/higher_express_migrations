<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidateCallConnectedSummary extends Model
{
    //
    protected $table      = 'tic_candidate_call_connected_summary';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'connect_id';

    protected $guarded = [];
}
