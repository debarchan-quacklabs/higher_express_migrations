<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CloudMasterLoginLog extends Model
{
    protected $table      = 'cloud_master_login_logs';
    protected $primaryKey = 'master_logs_id';
    public $timestamps    = false;

    protected $guarded = [];
}
