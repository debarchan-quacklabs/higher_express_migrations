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
        Schema::create('tic_candidate_references', function (Blueprint $table) {
            $table->id('reference_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->integer('recruiter')->nullable();
            $table->integer('job_owner')->default(0);
            $table->integer('ref_screen_id')->nullable();

            $table->string('ref_candidate_name', 225)->nullable();
            $table->string('ref_country_code', 10)->default('91');
            $table->string('ref_mobile_no', 225)->nullable();
            $table->string('ref_confidential', 225)->nullable();
            $table->integer('ref_jobid')->default(0);

            $table->longText('ref_notes')->nullable();

            $table->string('refby_name', 225)->nullable();
            $table->string('refby_mob', 225)->nullable();
            $table->integer('refby_screen_id')->nullable();

            $table->enum('ref_source', ['REF', 'RCV', 'RBO'])->default('REF');

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
        Schema::dropIfExists('tic_candidate_references');
    }
};
