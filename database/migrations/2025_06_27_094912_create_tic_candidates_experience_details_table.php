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
        Schema::create('tic_candidates_experience_details', function (Blueprint $table) {
            $table->id('candidate_experience_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('candidate_id')->nullable();

            $table->string('employer_name')->nullable();
            $table->string('employer_current_status')->nullable();
            $table->string('designation')->nullable();
            $table->string('duration_month_from')->nullable();
            $table->string('duration_year_from')->nullable();
            $table->string('duration_month_to')->nullable();
            $table->string('duration_year_to')->nullable();
            $table->string('notice_period')->nullable();
            $table->longText('job_profile')->nullable();

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
        Schema::dropIfExists('tic_candidates_experience_details');
    }
};
