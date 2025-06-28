<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicClient extends Model
{
    //
    protected $table      = 'tic_clients';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'id';

    protected $guarded = [];
}
