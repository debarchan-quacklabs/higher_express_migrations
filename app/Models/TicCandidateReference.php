<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidateReference extends Model
{
    //
    protected $table      = 'tic_candidate_references';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'reference_id';

    protected $guarded = [];
}
