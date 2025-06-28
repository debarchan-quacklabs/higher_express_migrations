<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCareerApplication extends Model
{
    //

    protected $table      = 'tic_career_application';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'id';

    protected $guarded = [];
}
