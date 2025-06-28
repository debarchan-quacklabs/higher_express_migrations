<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidateSnooze extends Model
{
    //
    protected $table      = 'tic_candidate_snooze';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'snooze_id';

    protected $guarded = [];
}
