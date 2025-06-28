<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ZUserType extends Model
{
protected $table = 'z_user_type';
    protected $primaryKey = 'role_id';
    public $timestamps = true;

    protected $guarded = [];}
