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
        Schema::create('tic_ticket_number', function (Blueprint $table) {
            $table->id('ticket_id');

            $table->string('t_ticket_index', 225)->nullable();
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->string('t_candidate_name', 225)->nullable();
            $table->string('t_mobile_num', 225)->nullable();
            $table->string('t_email_id', 225)->nullable();
            $table->unsignedInteger('t_company_id')->nullable();
            $table->string('t_position', 255)->nullable();
            $table->string('t_location', 225)->nullable();
            $table->unsignedInteger('t_int_jobid')->default(0);
            $table->unsignedInteger('t_job_owner')->default(0);
            $table->string('t_jobordername', 225)->nullable();
            $table->string('t_spoc', 225)->nullable();
            $table->string('t_recruiter', 225)->nullable();
            $table->string('t_supportexe', 225)->nullable();
            $table->string('t_ticket_no', 225)->nullable();
            $table->string('t_valid_till', 225)->nullable();
            $table->string('date', 225)->nullable();
            $table->string('time', 225)->nullable();
            $table->string('ip', 225)->nullable();
            $table->string('browser', 225)->nullable();

            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_ticket_numbers');
    }
};
