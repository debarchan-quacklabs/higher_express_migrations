<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZDegree extends Model
{
    protected $table = 'z_degrees';
    protected $primaryKey = 'degree_id';
    public $timestamps = true;

    protected $guarded = [];
}
