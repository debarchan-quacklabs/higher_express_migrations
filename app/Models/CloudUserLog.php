<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CloudUserLog extends Model
{
    protected $table      = 'cloud_user_logs';
    protected $primaryKey = 'clouduser_logs_id';
    public $timestamps    = true;

    protected $guarded = [];
}
