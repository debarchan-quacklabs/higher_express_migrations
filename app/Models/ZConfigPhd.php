<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZConfigPhd extends Model
{ 
    protected $table = 'z_config_phd';
    protected $primaryKey = 'phd_id';
    public $timestamps = true;

    protected $guarded = [];
}
