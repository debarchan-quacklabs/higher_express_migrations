<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicAdditionalQuestion extends Model
{
    //
    protected $table      = 'tic_additional_questions';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'addtional_question_id'; // typo retained to match your DB

    protected $guarded = [];
}
