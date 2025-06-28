<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicMailShareCandidate extends Model
{
    protected $table = 'tic_mail_share_candidates';
    protected $primaryKey = 'share_id';
    public $timestamps = true;

    protected $guarded = [];
}
