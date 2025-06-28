<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZConfigDepartment extends Model
{
    protected $table = 'z_config_department';
    protected $primaryKey = 'dept_id';
    public $timestamps = true;

    protected $guarded = [];
}
