<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesScreening extends Model
{
    //

    protected $table      = 'tic_candidates_screening';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'screen_id';

    protected $guarded = [];
}
