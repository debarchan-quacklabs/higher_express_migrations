<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    //
    protected $table      = 'demo';
    protected $primaryKey = 'demo_id';
    public $timestamps    = true;

    protected $guarded = [];
}
