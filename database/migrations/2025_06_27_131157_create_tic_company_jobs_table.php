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
        Schema::create('tic_company_jobs', function (Blueprint $table) {
            $table->id('job_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->string('cloud_id', 255)->nullable();
            $table->string('job_code', 255)->nullable();
            $table->string('job_code_id', 255)->nullable();
            $table->unsignedInteger('company_invoice_id')->default(0);
            $table->unsignedInteger('vendor_invoice_id')->default(0);
            $table->string('client_portal_job_code', 255)->nullable();
            $table->string('job_title', 255)->nullable();
            $table->enum('job_priority', ['Normal', 'Bulk', 'Hot'])->default('Normal');
            $table->longText('job_description')->nullable();
            $table->text('job_tags')->nullable();
            $table->text('job_attach_jd')->nullable();
            $table->string('job_attach_jd_name', 255)->nullable();
            $table->enum('job_posting_type', ['Internal', 'Public'])->default('Internal');
            $table->unsignedInteger('job_cv_limit')->nullable();
            $table->unsignedInteger('job_used_cv_limit')->default(0);
            $table->date('job_valid_till')->nullable();
            $table->string('company_id', 255)->nullable();
            $table->string('job_company_name', 255)->nullable();
            $table->unsignedInteger('job_channel_id')->nullable();
            $table->string('job_location', 255)->nullable();
            $table->string('job_state', 255)->nullable();
            $table->string('job_country', 255)->nullable();
            $table->unsignedInteger('job_industry_id')->nullable();
            $table->string('job_industry', 255)->nullable();
            $table->string('job_function_area', 255)->nullable();
            $table->unsignedInteger('job_function_id')->nullable();
            $table->unsignedInteger('job_role_id')->nullable();
            $table->string('job_emp_type', 255)->nullable();
            $table->string('job_exp_min', 255)->nullable();
            $table->string('job_exp_max', 255)->nullable();
            $table->string('job_position_nos', 255)->nullable();
            $table->string('job_band', 255)->nullable();
            $table->string('job_position_nos_used', 255)->default('0');
            $table->longText('job_qualification_id')->nullable();
            $table->longText('job_qualification')->nullable();
            $table->unsignedInteger('job_specialization_id')->nullable();
            $table->string('job_specialization', 255)->nullable();
            $table->string('search_type', 255)->nullable();
            $table->string('diversity', 255)->nullable();
            $table->string('job_sal_min', 255)->nullable();
            $table->string('job_sal_max', 255)->nullable();
            $table->string('job_currency', 255)->nullable();
            $table->enum('job_show_salary_details', ['Yes', 'No']);
            $table->string('job_remote_type', 30)->default('In Office');
            $table->string('age_limit', 255)->nullable();
            $table->string('can_join_within', 255)->nullable();
            $table->string('gender_diversity_type', 255)->nullable();
            $table->string('evaluate_attachment_name1', 255)->nullable();
            $table->text('evaluate_attachment_1')->nullable();
            $table->string('evaluate_attachment_name2', 255)->nullable();
            $table->text('evaluate_attachment_2')->nullable();
            $table->longText('things_to_remember')->nullable();
            $table->text('must_have_skills')->nullable();
            $table->text('good_have_skills')->nullable();
            $table->text('targetted_company')->nullable();
            $table->string('question_set_id', 255)->nullable();
            $table->unsignedInteger('scorecard_id')->nullable();
            $table->unsignedInteger('spoc_id')->nullable();
            $table->string('interviewer_id', 255)->nullable();
            $table->string('job_int_type', 255)->default('Submittal');
            $table->string('job_int_venue', 255)->nullable();

            $table->date('date')->nullable();
            $table->string('time', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->string('browser', 255)->nullable();
            $table->date('updated_date')->nullable();
            $table->string('updated_time', 255)->nullable();
            $table->string('job_posted_by_username', 255)->nullable();
            $table->string('job_posted_by_userid', 255)->nullable();
            $table->string('job_reviewer_id', 255)->nullable();
            $table->enum('jobboard_publish_status', ['Yes', 'No'])->default('No');
            $table->enum('job_status', ['Active', 'InActive'])->default('Active');

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_jobs');
    }
};
