<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTaggedSupportGuide extends Model
{
   protected $table = 'tic_tagged_support_guide';
    protected $primaryKey = 'support_tagid';
 public $timestamps = true;

    protected $guarded = []; 
}
