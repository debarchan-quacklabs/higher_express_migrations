<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicGlobalRecentVisited extends Model
{
  protected $table = 'tic_global_recent_visited';
    protected $primaryKey = 'visited_id';
    public $timestamps = true;

    protected $guarded = [];
}
