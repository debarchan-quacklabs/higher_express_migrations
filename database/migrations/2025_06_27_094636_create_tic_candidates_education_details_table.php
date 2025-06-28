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
        Schema::create('tic_candidates_education_details', function (Blueprint $table) {
            $table->id('candidate_education_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('candidate_id')->nullable();
            $table->integer('qualification_id')->nullable();

            $table->string('qualification_type', 50)->nullable();
            $table->string('qualification_name')->nullable();
            $table->string('specilization')->nullable();
            $table->string('course_type')->nullable();
            $table->string('university')->nullable();
            $table->string('percentage')->nullable();
            $table->string('passing_year')->nullable();

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
        Schema::dropIfExists('tic_candidates_education_details');
    }
};
