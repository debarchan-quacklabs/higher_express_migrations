<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCloudCompanySetting extends Model
{
    //
    protected $table      = 'tic_cloud_company_setting';
    protected $primaryKey = 'comp_setting_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
