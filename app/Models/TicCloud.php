<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCloud extends Model
{
    //
    protected $table      = 'tic_cloud';
    protected $primaryKey = 'cloud_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
