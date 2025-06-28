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
        Schema::create('tic_candidates_duplicate_log_history', function (Blueprint $table) {
            $table->id('duplicate_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->string('user_name', 255)->nullable();

            $table->integer('job_id')->nullable();
            $table->string('duplicate_name')->nullable();
            $table->string('duplicate_email')->nullable();
            $table->string('duplicate_phone')->nullable();

            $table->integer('duplicate_with')->nullable();
            $table->string('duplicate_from')->nullable();
            $table->string('tmp_resume')->nullable();
            $table->string('duplicate_source')->nullable();
            $table->string('last_hold_loop')->nullable();

            // Common columns
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
        Schema::dropIfExists('tic_candidates_duplicate_log_histories');
    }
};
