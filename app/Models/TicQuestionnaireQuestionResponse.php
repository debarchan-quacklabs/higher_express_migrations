<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicQuestionnaireQuestionResponse extends Model
{
    protected $table = 'tic_questionnaire_question_response';
    protected $primaryKey = 'response_id';
     public $timestamps = true;

    protected $guarded = [];
}
