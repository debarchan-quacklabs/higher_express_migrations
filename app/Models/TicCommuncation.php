<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCommuncation extends Model
{
    //
    protected $table      = 'tic_communcations';
    protected $primaryKey = 'com_id';
    public $timestamps    = true;
    public $incrementing  = false;

    protected $guarded = [];
}
