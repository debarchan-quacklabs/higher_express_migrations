<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZVendorSetting extends Model
{
    protected $table = 'z_vendor_settings';
    protected $primaryKey = 'vendor_id';
    public $timestamps = true;

    protected $guarded = []; // All fields are mass assignable
}