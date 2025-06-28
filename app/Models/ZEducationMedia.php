<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZEducationMedia extends Model
{
    protected $table = 'z_education_media';
    protected $primaryKey = 'medium_id';
    public $timestamps = true;

    protected $guarded = [];
}
