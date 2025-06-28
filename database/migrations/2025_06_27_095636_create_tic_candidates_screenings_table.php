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
        Schema::create('tic_candidates_screening', function (Blueprint $table) {
            $table->id('screen_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('job_ownerid')->nullable();
            $table->integer('candidate_id')->nullable();

            $table->string('candidate_name')->nullable();
            $table->string('candidate_email')->nullable();
            $table->string('candidate_country_code', 10)->default('91');
            $table->string('candidate_country_code_alt', 10)->default('91');
            $table->string('candidate_phone')->nullable();
            $table->string('candidate_alt_phone')->nullable();
            $table->string('candidate_dob')->nullable();
            $table->string('candidate_gender')->nullable();
            $table->string('candidate_location')->nullable();
            $table->string('candidate_address')->nullable();

            $table->integer('candidate_degree_id')->nullable();
            $table->string('candidate_high_qual')->nullable();
            $table->string('candidate_specialization')->nullable();
            $table->string('candidate_course_type')->nullable();
            $table->string('candidate_university')->nullable();
            $table->string('candidate_percentage')->nullable();
            $table->string('candidate_passing_year')->nullable();

            $table->text('candidate_skillset')->nullable();
            $table->text('candidate_language')->nullable();
            $table->string('candidate_marital_status', 50)->nullable();
            $table->string('candidate_nationality', 50)->default('Indian');
            $table->string('candidate_affrimative_action')->nullable();
            $table->string('candidate_differently_abled')->nullable();

            $table->string('candidate_pan', 50)->nullable();
            $table->string('candidate_aadhar', 50)->nullable();
            $table->string('candidate_passport', 50)->nullable();
            $table->string('candidate_dl', 50)->nullable();
            $table->string('candidate_voter', 50)->nullable();

            $table->string('candidate_resume')->nullable();
            $table->string('candidate_resume_original')->nullable();
            $table->string('candidate_employer_name')->nullable();
            $table->string('candidate_employer_type')->nullable();
            $table->string('candidate_designation')->nullable();
            $table->string('candidate_duration_month_from')->nullable();
            $table->string('candidate_duration_year_from')->nullable();
            $table->string('candidate_duration_month_to')->nullable();
            $table->string('candidate_duration_year_to')->nullable();
            $table->string('candidate_notice_period')->nullable();
            $table->string('candidate_last_working_day')->nullable();
            $table->string('candidate_cr_ctc', 50)->nullable();
            $table->string('candidate_exp_ctc', 50)->nullable();
            $table->string('candidate_overall_exp', 50)->nullable();
            $table->string('nos_company', 50)->nullable();
            $table->string('employer_current_status', 50)->nullable();
            $table->longText('candidate_job_profile')->nullable();

            $table->integer('recruiter')->nullable();
            $table->string('source_from')->nullable();
            $table->string('screen_status')->nullable();
            $table->string('last_hold_loop')->nullable();

            // Audit fields
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
        Schema::dropIfExists('tic_candidates_screenings');
    }
};
