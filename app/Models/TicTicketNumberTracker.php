<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTicketNumberTracker extends Model
{
     protected $table = 'tic_ticket_number_tracker';
    protected $primaryKey = 'tracker_id';
    public $timestamps = true;

    protected $guarded = [];
}
