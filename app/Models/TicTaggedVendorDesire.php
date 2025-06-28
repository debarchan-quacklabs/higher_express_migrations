<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTaggedVendorDesire extends Model
{
    protected $table = 'tic_tagged_vendor_desire';
    protected $primaryKey = 'tag_vendor_desire_id';
    public $timestamps = true;

    protected $guarded = [];
}
