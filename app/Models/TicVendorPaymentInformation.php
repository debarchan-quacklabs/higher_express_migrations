<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicVendorPaymentInformation extends Model
{
    protected $table = 'tic_vendor_payment_information';
    protected $primaryKey = 'payment_info_id';
    public $timestamps = true;

    protected $guarded = [];
}
