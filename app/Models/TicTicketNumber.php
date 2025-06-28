<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTicketNumber extends Model
{
   protected $table = 'tic_ticket_number';
    protected $primaryKey = 'ticket_id';
        public $timestamps = true;

    protected $guarded = [];
}
