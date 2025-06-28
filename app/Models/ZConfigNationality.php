<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZConfigNationality extends Model
{
   protected $table = 'z_config_nationality';
    protected $primaryKey = 'nationality_id';
    public $timestamps = true;

    protected $guarded = [];
}
