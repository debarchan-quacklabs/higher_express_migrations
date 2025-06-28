<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicQuestionnaireAnswer extends Model
{
   protected $table = 'tic_questionnaire_answer';
    protected $primaryKey = 'answer_id';
                 public $timestamps = true;

    protected $guarded = [];
}
