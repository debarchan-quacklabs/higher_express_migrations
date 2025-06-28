<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tic_interviews', function (Blueprint $table) {
            $table->id('interview_id'); // Primary key
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('applicant_id')->nullable();
            $table->string('interview_type')->nullable();
            $table->unsignedInteger('interview_venue')->nullable();
            $table->string('interview_date')->nullable();
            $table->string('interview_time')->nullable();
            $table->string('interview_duration')->nullable();
            $table->string('interview_round')->nullable();
            $table->string('vc_services')->nullable();
            $table->text('vc_url')->nullable();
            $table->string('interviewers')->nullable();
            $table->string('interview_kit')->nullable();
            $table->string('scheduled_by')->nullable();
            $table->string('status')->nullable();
            $table->string('date')->nullable();
            $table->string('time')->nullable();
            $table->string('ip')->nullable();
            $table->string('browser')->nullable();

            $table->timestamps(); // adds created_at and updated_at
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_interviews');
    }
};
