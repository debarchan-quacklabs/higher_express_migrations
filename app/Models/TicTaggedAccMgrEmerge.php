<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicTaggedAccMgrEmerge extends Model
{
    protected $table = 'tic_tagged_acc_mgr_emerge';
    protected $primaryKey = 'emerge_tag_id';
    public $timestamps = true;

    protected $guarded = []; 
}
