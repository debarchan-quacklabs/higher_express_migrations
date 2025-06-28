<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicNotification extends Model
{
    protected $table = 'tic_notification';
    protected $primaryKey = 'notification_id';
    public $timestamps = true;

    protected $guarded = [];}
