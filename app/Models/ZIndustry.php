<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZIndustry extends Model
{
   protected $table = 'z_industries';
    protected $primaryKey = 'industry_id';
    public $timestamps = true;

    protected $guarded = [];
}
