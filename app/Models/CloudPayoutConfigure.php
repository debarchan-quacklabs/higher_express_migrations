<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CloudPayoutConfigure extends Model
{
    protected $table      = 'cloud_payout_configure';
    protected $primaryKey = 'config_id';
    public $timestamps    = false;

    protected $guarded = [];
}
