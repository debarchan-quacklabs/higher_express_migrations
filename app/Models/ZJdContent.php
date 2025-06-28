<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZJdContent extends Model
{
protected $table = 'z_jd_content';
    protected $primaryKey = 'sbc_id';
    public $timestamps = true;

    protected $guarded = [];
}
