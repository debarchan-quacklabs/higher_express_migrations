<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesEducationDetail extends Model
{
    //
    protected $table      = 'tic_candidates_education_details';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'candidate_education_id';

    protected $guarded = [];
}
