<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tic_ticket_number_tracker', function (Blueprint $table) {
        $table->id('tracker_id');
        
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('cnd_ticket_id')->nullable();
        $table->unsignedInteger('cnd_applicant_id')->nullable();
        $table->string('cnd_applicant_key', 50)->nullable();
        $table->unsignedInteger('cnd_recruiter_id')->default(0);
        $table->unsignedInteger('cnd_job_id')->default(0);
        $table->unsignedInteger('cnd_job_owner')->nullable();
        $table->enum('cnd_request_type', ['New', 'Re-Ticket', 'Tagging'])->default('New');
        $table->string('application_id', 50)->nullable();
        $table->string('requisition_code', 50)->default('NA');
        $table->string('request_date', 50)->nullable();
        $table->string('request_time', 50)->nullable();
        $table->string('applied_pos', 225)->nullable();
        $table->string('applied_com', 50)->nullable();
        $table->string('applied_loc', 225)->nullable();
        $table->string('cnd_applied_earlier', 20)->default('No');
        $table->string('cnd_name', 225)->nullable();
        $table->string('cnd_email', 225)->nullable();
        $table->string('cnd_mobile', 225)->nullable();
        $table->string('cnd_alt_mobile', 30)->nullable();
        $table->string('cnd_dob', 225)->nullable();
        $table->string('cnd_age', 225)->nullable();
        $table->string('cnd_gender', 30)->nullable();
        $table->string('cnd_marital_status', 30)->nullable();
        $table->string('cnd_pan', 15)->nullable();
        $table->string('cnd_aadhar', 30)->nullable();
        $table->string('cnd_passport', 30)->nullable();
        $table->string('cnd_dl', 30)->nullable();
        $table->string('cnd_voter_id', 30)->nullable();
        $table->string('cnd_qualification', 225)->nullable();
        $table->string('cnd_graduation', 225)->nullable();
        $table->string('cnd_course_type', 50)->nullable();
        $table->string('cnd_university')->nullable();
        $table->string('cnd_year_of_passing', 30)->nullable();
        $table->string('cnd_percentage', 30)->nullable();
        $table->string('cnd_current_com', 225)->nullable();
        $table->string('cnd_current_pos', 225)->nullable();
        $table->string('cnd_emp_status', 225)->nullable();
        $table->string('cnd_emp_duration', 255)->nullable();
        $table->string('cnd_total_exp', 225)->nullable();
        $table->string('cnd_ctc', 225)->nullable();
        $table->string('cnd_expected_ctc', 225)->nullable();
        $table->string('cnd_nos_company_working_with', 30)->nullable();
        $table->string('cnd_location', 200)->nullable();
        $table->string('cnd_ready_for_relocation', 10)->default('Yes');
        $table->string('cnd_nationality', 30)->nullable();
        $table->text('cnd_skills')->nullable();
        $table->text('cnd_language')->nullable();
        $table->string('cnd_affirmative_action', 30)->nullable();
        $table->string('cnd_differently_abled', 30)->nullable();
        $table->text('cnd_reason_of_job_change')->nullable();
        $table->text('cnd_source')->nullable();
        $table->text('cnd_source_name')->nullable();
        $table->text('cnd_interview_dt')->nullable();
        $table->text('cnd_interview_month')->nullable();
        $table->text('cnd_spoc_name')->nullable();
        $table->text('cnd_spoc_email')->nullable();
        $table->text('cnd_interviewer_name')->nullable();
        $table->text('cnd_interviewer_email')->nullable();
        $table->longText('cnd_h_notes')->nullable();
        $table->enum('action_taken', ['Yes', 'No'])->default('No');
        $table->string('date', 30)->nullable();
        $table->string('time', 30)->nullable();
        $table->string('ip', 30)->nullable();
        $table->string('browser', 50)->nullable();

        $table->timestamps(); 
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_ticket_number_trackers');
    }
};
