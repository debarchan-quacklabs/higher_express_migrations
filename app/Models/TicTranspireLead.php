<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTranspireLead extends Model
{
    protected $table = 'tic_transpire_lead';
    protected $primaryKey = 'transpire_lead_id';
    public $timestamps = true;

    protected $guarded = []; 
}
