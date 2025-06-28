<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CloudAllowedModule extends Model
{
    protected $table      = 'cloud_allowed_modules';
    protected $primaryKey = 'cam_id';
    public $timestamps    = false;
    protected $guarded = [];
}
