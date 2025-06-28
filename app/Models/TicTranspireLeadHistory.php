<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTranspireLeadHistory extends Model
{
    protected $table = 'tic_transpire_lead_history';
    protected $primaryKey = 'transpire_lead_history_id';
    public $timestamps = true;

    protected $guarded = [];
}
