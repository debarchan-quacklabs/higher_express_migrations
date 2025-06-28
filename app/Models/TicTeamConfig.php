<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTeamConfig extends Model
{
    protected $table = 'tic_team_config';
    protected $primaryKey = 'team_id';
    public $timestamps = true;

    protected $guarded = [];
}
