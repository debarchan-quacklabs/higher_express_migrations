<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesMaster extends Model
{
    //
    protected $table      = 'tic_candidates_master';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'candidate_id';

    protected $guarded = [];
}
