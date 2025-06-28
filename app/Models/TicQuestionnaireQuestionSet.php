<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicQuestionnaireQuestionSet extends Model
{
   protected $table = 'tic_questionnaire_question_set';
    protected $primaryKey = 'question_set_id';
    public $timestamps = true;

    protected $guarded = [];
}
