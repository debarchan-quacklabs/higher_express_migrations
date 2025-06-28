<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicAdditionalQuestionSet extends Model
{
    //
    protected $table      = 'tic_additional_question_set';
    public $timestamps    = true;
    public $incrementing  = false;
    protected $primaryKey = 'additional_question_set_id';

    protected $guarded = [];
}
