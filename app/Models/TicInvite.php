<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicInvite extends Model
{
    protected $table = 'tic_invites';
    protected $primaryKey = 'invite_id';
    public $timestamps = true;

    protected $guarded = [];
}
