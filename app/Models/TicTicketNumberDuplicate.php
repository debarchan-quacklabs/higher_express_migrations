<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTicketNumberDuplicate extends Model
{
   protected $table = 'tic_ticket_number_duplicate';
    protected $primaryKey = 'dup_ticket_id';
    public $timestamps = true;

    protected $guarded = [];
}
