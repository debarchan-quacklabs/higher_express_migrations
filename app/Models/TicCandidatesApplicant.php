<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesApplicant extends Model
{
    //
    protected $table      = 'tic_candidates_applicants';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'applicant_id';

    protected $guarded = [];
}
