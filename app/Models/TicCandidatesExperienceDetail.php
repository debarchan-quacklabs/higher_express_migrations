<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesExperienceDetail extends Model
{
    //
    protected $table      = 'tic_candidates_experience_details';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'candidate_experience_id';

    protected $guarded = [];

}
