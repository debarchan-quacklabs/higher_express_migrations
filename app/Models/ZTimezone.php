<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZTimezone extends Model
{
    protected $table = 'z_timezones';
    protected $primaryKey = 'timezone_id';
    public $timestamps = true;

    protected $guarded = [];
}
