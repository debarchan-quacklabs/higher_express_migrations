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
        Schema::create('tic_candidate_call_connected_summary', function (Blueprint $table) {
            $table->id('connect_id');

            $table->unsignedInteger('u_id')->nullable();    // User ID
            $table->unsignedInteger('role_id')->nullable(); // Role ID
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->integer('candidate_id')->nullable();
            $table->integer('screen_id')->nullable();

            $table->string('screen_type')->nullable();
            $table->string('call_start_time')->nullable();
            $table->string('call_end_time')->nullable();
            $table->string('screen_status')->nullable();

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
        Schema::dropIfExists('tic_candidate_call_connected_summaries');
    }
};
