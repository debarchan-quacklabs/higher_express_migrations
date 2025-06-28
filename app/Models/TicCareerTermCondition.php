<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCareerTermCondition extends Model
{
    //
    protected $table      = 'tic_career_term_condition';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'id';

    protected $guarded = [];
}
