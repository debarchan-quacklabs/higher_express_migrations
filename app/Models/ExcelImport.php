<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExcelImport extends Model
{
    //
    protected $table = 'excel_imports';
    protected $primaryKey = 'id';
    public $timestamps = true;

    protected $guarded = [];
}
