<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidatesSourceSummary extends Model
{
    //
    protected $table      = 'tic_candidates_source_summary';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'summary_id';

    protected $guarded = [];
}
