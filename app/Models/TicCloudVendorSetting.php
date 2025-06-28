<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCloudVendorSetting extends Model
{
    //
    protected $table      = 'tic_cloud_vendor_setting';
    protected $primaryKey = 'vendor_setting_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
