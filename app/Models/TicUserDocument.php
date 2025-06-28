<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicUserDocument extends Model
{
   protected $table = 'tic_user_document';
    protected $primaryKey = 'document_id';
    public $timestamps = true;

    protected $guarded = [];
}
