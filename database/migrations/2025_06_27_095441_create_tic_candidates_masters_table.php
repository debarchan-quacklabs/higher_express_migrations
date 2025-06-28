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
        Schema::create('tic_candidates_master', function (Blueprint $table) {
            $table->id('candidate_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->string('candidate_key')->nullable();
            $table->integer('cloud_id')->nullable();
            $table->string('candidate_name')->nullable();
            $table->string('candidate_email')->nullable();

            $table->string('candidate_country_code', 10)->default('91');
            $table->string('candidate_phone')->nullable();
            $table->enum('mobverifiedby_tic', ['Yes', 'No'])->default('No');
            $table->string('candidate_country_code_alt', 10)->default('91');
            $table->string('candidate_alt_phone')->nullable();

            $table->string('candidate_dob')->nullable();
            $table->string('candidate_gender')->nullable();
            $table->string('candidate_location')->nullable();
            $table->text('candidate_address')->nullable();

            $table->string('candidate_high_qual')->nullable();
            $table->string('candidate_specialization')->nullable();
            $table->string('candidate_course_type')->nullable();
            $table->string('candidate_university')->nullable();
            $table->string('candidate_percentage')->nullable();
            $table->string('candidate_passing_year')->nullable();

            $table->text('candidate_skillset')->nullable();
            $table->text('candidate_language')->nullable();
            $table->string('candidate_marital_status', 50)->nullable();
            $table->text('candidate_tags')->nullable();

            $table->string('candidate_pan', 20)->nullable();
            $table->string('candidate_aadhar', 30)->nullable();
            $table->string('candidate_passport', 30)->nullable();
            $table->string('candidate_dl', 30)->nullable();
            $table->string('candidate_voter', 30)->nullable();

            $table->string('candidate_affrimative_action')->nullable();
            $table->string('candidate_differently_abled')->nullable();
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

            $table->string('candidate_cr_ctc', 50)->nullable();
            $table->string('candidate_exp_ctc', 50)->nullable();
            $table->string('candidate_overall_exp', 50)->nullable();

            $table->string('nos_company', 50)->nullable();
            $table->string('employer_current_status', 50)->nullable();
            $table->longText('candidate_job_profile')->nullable();

            $table->string('last_hold_loop')->nullable();
            $table->date('created_date')->nullable();
            $table->string('created_time')->nullable();
            $table->date('last_modified')->nullable();

            $table->integer('total_job_offers_count')->nullable();
            $table->integer('total_job_applied_count')->nullable();

            // Audit fields
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
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
        Schema::dropIfExists('tic_candidates_masters');
    }
};
