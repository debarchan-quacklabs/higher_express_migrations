<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    //
    protected $table     = 'password_resets';
    public $timestamps   = true;
    public $incrementing = false; // no primary key defined

    protected $guarded = [];
}
