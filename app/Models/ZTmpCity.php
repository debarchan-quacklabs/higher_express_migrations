<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZTmpCity extends Model
{

    protected $table = 'z_tmp_city';
    protected $primaryKey = 'tmp_city_id';
    public $timestamps = true;

    protected $guarded = [];
}
