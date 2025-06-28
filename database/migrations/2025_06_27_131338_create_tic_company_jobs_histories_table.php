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
        Schema::create('tic_company_jobs_history', function (Blueprint $table) {
            $table->id('job_history_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('job_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('user_name', 255)->nullable();
            $table->string('activity_type', 255)->nullable();
            $table->longText('activity_notes')->nullable();

            $table->date('date')->nullable();
            $table->string('time', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->string('browser', 255)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_jobs_histories');
    }
};
