<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyBillingTariffSlab extends Model
{
    //
    protected $table      = 'tic_company_billing_tariff_slab';
    protected $primaryKey = 'invoice_slab_id';
    public $incrementing  = false;
    public $timestamps    = true;

    protected $guarded = [];
}
