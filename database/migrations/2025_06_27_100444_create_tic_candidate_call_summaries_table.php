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
        Schema::create('tic_candidate_call_summary', function (Blueprint $table) {
            $table->id('r_summary_id');

            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            $table->integer('cloud_id')->nullable();
            $table->string('r_summary_dt', 225)->nullable();
            $table->integer('r_summary_userid')->nullable();
            $table->integer('r_job_id')->default(0);
            $table->integer('r_connected')->default(0);
            $table->integer('r_validated')->default(0);
            $table->integer('r_call_wait')->default(0);
            $table->integer('r_switch_off')->default(0);
            $table->integer('r_no_responce')->default(0);
            $table->integer('r_not_reachable')->default(0);
            $table->integer('r_not_inservice')->default(0);
            $table->integer('r_dropped')->default(0);
            $table->integer('r_today_total')->default(0);
            $table->integer('r_redailed')->default(0);

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
        Schema::dropIfExists('tic_candidate_call_summaries');
    }
};
