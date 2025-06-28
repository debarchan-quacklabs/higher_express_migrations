<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyVendorLocation extends Model
{
    //
    protected $table      = 'tic_company_vendor_locations';
    protected $primaryKey = 'vendor_location_id';
    protected $guarded    = [];
}
