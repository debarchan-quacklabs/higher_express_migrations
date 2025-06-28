<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZLanguage extends Model
{
 protected $table = 'z_languages';
    protected $primaryKey = 'language_id';
    public $timestamps = true;

    protected $guarded = [];
}
