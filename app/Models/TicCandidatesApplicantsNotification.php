<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesApplicantsNotification extends Model
{
    //
    protected $table      = 'tic_candidates_applicants_notification';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'candidate_notification_id';

    protected $guarded = [];
}
