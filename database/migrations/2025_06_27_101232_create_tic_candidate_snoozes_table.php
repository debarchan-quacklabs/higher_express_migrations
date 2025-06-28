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
        Schema::create('tic_candidate_snooze', function (Blueprint $table) {
            $table->id('snooze_id');

            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            $table->unsignedInteger('userid')->nullable();
            $table->string('recruiter', 225)->nullable();
            $table->string('activity_date', 225)->nullable();
            $table->string('activity_time', 225)->nullable();
            $table->unsignedInteger('applicant_id')->nullable();
            $table->string('snooze_dt', 225)->nullable();

                                                       // Audit fields
            $table->string('date', 30)->nullable();    // Audit date
            $table->string('time', 30)->nullable();    // Audit time
            $table->string('ip', 30)->nullable();      // Audit IP
            $table->string('browser', 30)->nullable(); // Audit browser

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_candidate_snoozes');
    }
};
