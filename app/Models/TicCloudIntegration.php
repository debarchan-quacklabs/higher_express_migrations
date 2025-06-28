<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCloudIntegration extends Model
{
    //
    protected $table      = 'tic_cloud_integration';
    protected $primaryKey = 'id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
