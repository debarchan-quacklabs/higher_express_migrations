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
        Schema::create('tic_candidates_source_summary', function (Blueprint $table) {
            $table->id('summary_id');

            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->integer('cloud_id')->nullable();
            $table->integer('job_id')->nullable();
            $table->unsignedInteger('u_id')->nullable();

            $table->date('date')->nullable();
            $table->string('time')->nullable();

            $table->string('add_candidate')->default('0');
            $table->string('add_from_excel')->default('0');
            $table->string('add_from_resume')->default('0');
            $table->string('add_from_db')->default('0');
            $table->string('add_reference')->default('0');
            $table->string('total_sourced')->default('0');

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
        Schema::dropIfExists('tic_candidates_source_summaries');
    }
};
