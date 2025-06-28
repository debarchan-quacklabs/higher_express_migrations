<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CloudUser extends Model
{
    //
    protected $table      = 'cloud_user';
    protected $primaryKey = 'cloud_user_id';
    public $timestamps    = true;

    protected $guarded = [];
}
