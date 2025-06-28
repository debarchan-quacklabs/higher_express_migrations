<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyHistory extends Model
{
    //
    protected $table      = 'tic_company_history';
    protected $primaryKey = 'company_history_id';
    protected $guarded    = [];
}
