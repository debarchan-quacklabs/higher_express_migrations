<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZSearchType extends Model
{
protected $table = 'z_search_type';
    protected $primaryKey = 'search_type_id';
    public $timestamps = true;

    protected $guarded = [];
}
