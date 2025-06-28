<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCloudHistory extends Model
{
    //
    protected $table      = 'tic_cloud_history';
    protected $primaryKey = 'cloud_history_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
