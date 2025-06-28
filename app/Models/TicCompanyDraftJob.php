<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyDraftJob extends Model
{
    //
    protected $table      = 'tic_company_draft_jobs';
    protected $primaryKey = 'draft_job_id';
    protected $guarded    = [];
}
