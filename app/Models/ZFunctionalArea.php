<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZFunctionalArea extends Model
{
     protected $table = 'z_functional_areas';
    protected $primaryKey = 'funarea_id';
    public $timestamps = true;

    protected $guarded = [];
}
