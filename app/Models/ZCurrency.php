<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZCurrency extends Model
{
   protected $table = 'z_currencies';
    protected $primaryKey = 'currency_id';
    public $timestamps = true;

    protected $guarded = [];
}
