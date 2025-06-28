<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompany extends Model
{
    //
    protected $table      = 'tic_company';
    protected $primaryKey = 'company_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
