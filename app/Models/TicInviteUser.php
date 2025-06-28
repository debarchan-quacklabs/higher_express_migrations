<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicInviteUser extends Model
{
protected $table = 'tic_invite_users';
    protected $primaryKey = 'invite_id';
    public $timestamps = true;

    protected $guarded = [];
}
