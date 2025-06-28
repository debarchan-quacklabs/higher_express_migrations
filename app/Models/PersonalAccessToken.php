<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    //
    protected $table      = 'personal_access_tokens';
    public $timestamps    = true;
    protected $primaryKey = 'id'; 

    protected $guarded = [];
}
