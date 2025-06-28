<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTaggedRecruiterDesire extends Model
{
     protected $table = 'tic_tagged_recruiter_desire';
    protected $primaryKey = 'tag_recruiter_desire_id';
     public $timestamps = true;

    protected $guarded = [];
}
