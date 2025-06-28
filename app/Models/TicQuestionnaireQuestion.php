<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicQuestionnaireQuestion extends Model
{
     protected $table = 'tic_questionnaire_questions';
    protected $primaryKey = 'question_id';
         public $timestamps = true;

    protected $guarded = [];
}
