<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidateSearch extends Model
{
    //
    protected $table      = 'tic_candidate_search';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'search_id';

    protected $guarded = [];
}
