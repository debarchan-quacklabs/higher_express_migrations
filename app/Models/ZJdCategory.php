<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZJdCategory extends Model
{
 protected $table = 'z_jd_category';
    protected $primaryKey = 'jd_category_id';
    public $timestamps = true;

    protected $guarded = [];
}
