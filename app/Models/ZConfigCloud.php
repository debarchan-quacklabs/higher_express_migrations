<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZConfigCloud extends Model
{
    protected $table = 'z_config_cloud';
    protected $primaryKey = 'config_cloud_id';
    public $timestamps = true;

    protected $guarded = [];
}
