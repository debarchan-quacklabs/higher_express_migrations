<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCloudCompliance extends Model
{
    //

    protected $table      = 'tic_cloud_compliances';
    protected $primaryKey = 'cloud_compliances_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
