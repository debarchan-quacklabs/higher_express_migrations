<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyBillingTariff extends Model
{
    //
    protected $table      = 'tic_company_billing_tariff';
    protected $primaryKey = 'invoice_id';
    public $incrementing  = false;
    public $timestamps    = true;

    protected $guarded = [];
}
