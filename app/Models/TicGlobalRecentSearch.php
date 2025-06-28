<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicGlobalRecentSearch extends Model
{
    //
    protected $table      = 'tic_global_recent_search';
    protected $primaryKey = 'global_search_id';
    protected $guarded    = [];
}
