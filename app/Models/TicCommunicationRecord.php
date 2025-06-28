<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCommunicationRecord extends Model
{
    //
    protected $table      = 'tic_communication_records';
    protected $primaryKey = 'com_rec_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
