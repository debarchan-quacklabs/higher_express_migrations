<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TicCompanyJobsHistory extends Model
{
    //
    protected $table      = 'tic_company_jobs_history';
    protected $primaryKey = 'job_history_id';
    protected $guarded    = [];
}
