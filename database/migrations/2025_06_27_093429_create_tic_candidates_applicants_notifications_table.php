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
        Schema::create('tic_candidates_applicants_notification', function (Blueprint $table) {
            $table->id('candidate_notification_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('applied_job_id')->nullable();

            $table->string('applied_job_title', 255)->default('NA');
            $table->string('applied_company_name', 255)->default('NA');
            $table->string('applied_company_location', 255)->default('NA');

            $table->integer('screen_id')->nullable();
            $table->integer('applicant_id')->nullable();
            $table->integer('candidate_id')->nullable();

            $table->string('activity_type', 255)->nullable();
            $table->longText('activity_notes')->nullable();

            $table->integer('user_id')->nullable();
            $table->string('user_name', 255)->nullable();

            // Common fields
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
        Schema::dropIfExists('tic_candidates_applicants_notifications');
    }
};
