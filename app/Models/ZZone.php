<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZZone extends Model
{
     protected $table = 'z_zone';
    protected $primaryKey = 'zone_id';
    public $timestamps = true;
    protected $guarded = [];

}
