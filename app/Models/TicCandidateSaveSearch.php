<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCandidateSaveSearch extends Model
{
    //
    protected $table      = 'tic_candidate_save_search';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'save_search_id';

    protected $guarded = [];
}
