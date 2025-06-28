<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicQuestionnaireApplicantSet extends Model
{
   protected $table = 'tic_questionnaire_applicant_set';
    protected $primaryKey = 'questionnaire_set_response_id';
             public $timestamps = true;

    protected $guarded = []; 
}
