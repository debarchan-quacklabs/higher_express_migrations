<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTempResume extends Model
{
    protected $table = 'tic_temp_resume';
    protected $primaryKey = 'temp_resume_id';
    public $timestamps = true;

    protected $guarded = [];
}
