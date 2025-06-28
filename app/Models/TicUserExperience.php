<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserExperience extends Model
{
    protected $table = 'tic_user_experience';
    protected $primaryKey = 'experience_id';
    public $timestamps = true;

    protected $guarded = [];
}
