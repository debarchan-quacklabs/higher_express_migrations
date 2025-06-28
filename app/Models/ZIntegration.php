<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZIntegration extends Model
{
 protected $table = 'z_integrations';
    protected $primaryKey = 'intg_id';
    public $timestamps = true;

    protected $guarded = [];
}
