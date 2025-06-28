<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCareerBasic extends Model
{
    //

    protected $table      = 'tic_career_basic';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'id';

    protected $guarded = [];
}
