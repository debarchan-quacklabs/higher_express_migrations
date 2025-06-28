<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZEmpType extends Model
{
     protected $table = 'z_emp_type';
    protected $primaryKey = 'emp_type_id';
    public $timestamps = true;

    protected $guarded = [];
}
