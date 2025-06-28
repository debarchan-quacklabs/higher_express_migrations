<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserVisitRecord extends Model
{
    protected $table = 'tic_user_visit_records';
    protected $primaryKey = 'visit_id';
    public $timestamps = true;

    protected $guarded = [];
}
