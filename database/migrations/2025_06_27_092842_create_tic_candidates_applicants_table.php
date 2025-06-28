<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tic_candidates_applicants', function (Blueprint $table) {
            $table->id('applicant_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->string('applicant_key', 11)->nullable();
            $table->integer('candidate_id')->nullable();
            $table->integer('screen_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('job_ownerid')->nullable();
            $table->integer('recruiter')->nullable();
            $table->integer('distbut_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('location_id')->nullable();

            $table->string('applicant_rating', 50)->default('0');
            $table->string('applicant_status', 100)->nullable();

            $table->string('candidate_name', 100)->nullable();
            $table->string('candidate_email', 100)->nullable();
            $table->string('candidate_country_code', 10)->default('91');
            $table->string('candidate_country_code_alt', 10)->default('91');
            $table->string('candidate_phone', 15)->nullable();
            $table->string('candidate_alt_phone', 15)->nullable();
            $table->string('candidate_alt_phone2', 15)->nullable();
            $table->string('candidate_dob', 15)->nullable();
            $table->string('candidate_gender', 255)->nullable();
            $table->string('candidate_image', 255)->nullable();
            $table->string('candidate_location', 100)->nullable();
            $table->string('candidate_address', 255)->nullable();

            $table->integer('candidate_degree_id')->nullable();
            $table->string('candidate_high_qual', 255)->nullable();
            $table->string('candidate_specialization', 255)->nullable();
            $table->string('candidate_course_type', 50)->nullable();
            $table->string('candidate_university', 150)->nullable();
            $table->string('candidate_percentage', 15)->nullable();
            $table->string('candidate_passing_year', 10)->nullable();
            $table->text('candidate_skillset')->nullable();
            $table->text('candidate_language')->nullable();

            $table->string('candidate_marital_status', 50);
            $table->string('candidate_nationality', 50)->default('Indian');
            $table->string('candidate_affrimative_action', 30)->nullable();
            $table->string('candidate_differently_abled', 30)->nullable();
            $table->string('candidate_resume', 255)->nullable();

            $table->string('candidate_employer_name', 255)->nullable();
            $table->string('candidate_employer_type', 30)->nullable();
            $table->string('candidate_designation', 150)->nullable();
            $table->string('candidate_duration_month_from', 30)->nullable();
            $table->string('candidate_duration_year_from', 30)->nullable();
            $table->string('candidate_duration_month_to', 255)->nullable();
            $table->string('candidate_duration_year_to', 30)->nullable();
            $table->string('candidate_cr_ctc', 30)->nullable();
            $table->string('candidate_exp_ctc', 30)->nullable();
            $table->string('candidate_overall_exp', 255)->nullable();
            $table->string('candidate_job_profile', 255)->nullable();
            $table->text('reason_job_change')->nullable();

            $table->string('create_date', 30)->nullable();
            $table->string('create_time', 30)->nullable();
            $table->string('source', 30)->nullable();
            $table->string('update_date', 30)->nullable();
            $table->string('update_time', 20)->nullable();
            $table->string('nos_company', 30)->nullable();
            $table->string('employer_current_status', 100)->nullable();
            $table->string('notice_period', 30)->nullable();
            $table->string('last_working_day', 30)->nullable();
            $table->string('applied_earlier', 30)->nullable();
            $table->string('applied_status', 30)->nullable();
            $table->string('applied_date', 30)->nullable();

            $table->string('pan', 15)->nullable();
            $table->string('aadhar', 16)->nullable();
            $table->string('passport', 20)->nullable();
            $table->string('dl', 20)->nullable();
            $table->string('voter_id', 30)->nullable();

            $table->enum('mail', ['Yes', 'No'])->default('No');
            $table->enum('sms', ['Yes', 'No'])->default('No');
            $table->enum('whatsapp', ['Yes', 'No'])->default('No');

            $table->string('ack_no', 30)->nullable();
            $table->integer('ack_no_count')->nullable();
            $table->string('ack_create_date', 50)->nullable();
            $table->string('ack_valid_till', 50)->nullable();

            $table->integer('interview_id')->nullable();
            $table->string('scheduled_date', 50)->nullable();
            $table->string('scheduled_time', 50)->nullable();
            $table->string('interview_ass_type', 150)->nullable();
            $table->string('interview_ass_round', 150)->nullable();
            $table->string('interview_location', 50)->nullable();

            $table->enum('attn_status', ['Yes', 'No'])->default('No');
            $table->string('interview_attn_dt', 30)->nullable();
            $table->string('interview_attn_time', 20)->nullable();
            $table->string('interview_taken_by', 150)->nullable();

            $table->integer('rescheduled_count')->nullable();
            $table->integer('no_response_count')->nullable();
            $table->integer('posponed_count')->nullable();

            $table->string('priority', 150)->default('Normal');
            $table->enum('int_confirm', ['sch', 'usch'])->default('usch');
            $table->string('transfer', 150)->default('No');
            $table->string('review_profile', 150)->default('Review-Pending');
            $table->string('offer_position', 150)->nullable();
            $table->text('exp_doj')->nullable();
            $table->text('actual_doj')->nullable();
            $table->string('emp_code', 150)->nullable();
            $table->string('offer_ctc', 150)->nullable();
            $table->string('status_re_ticket', 150)->default('NA');
            $table->longText('h_notes')->nullable();

            // Required common columns
            $table->date('date')->nullable();
            $table->string('time')->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_candidates_applicants');
    }
};
