<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyAgreement extends Model
{
    //
    protected $table      = 'tic_company_agreements';
    protected $primaryKey = 'company_agreements_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
