<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUsersSignature extends Model
{
     protected $table = 'tic_users_signature';
    protected $primaryKey = 'signature_id';
    public $timestamps = true;

    protected $guarded = [];
 }
