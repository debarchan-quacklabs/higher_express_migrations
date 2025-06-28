<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZConfigCity extends Model
{
    protected $table = 'z_config_city';
    protected $primaryKey = 'loc_id';
    public $timestamps = true;

    protected $guarded = [];
}
