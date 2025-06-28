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
        Schema::create('tic_ticket_number_duplicate', function (Blueprint $table) {
            $table->id('dup_ticket_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->string('t_candidate_name', 225)->nullable();
            $table->string('t_mobile_num', 225)->nullable();
            $table->string('t_email_id', 225)->nullable();
            $table->unsignedInteger('t_company_id')->nullable();
            $table->string('t_position', 225)->nullable();
            $table->string('t_location', 225)->nullable();
            $table->unsignedInteger('t_int_jobid')->nullable();
            $table->string('t_jobordername', 225)->nullable();
            $table->string('t_spoc', 225)->nullable();
            $table->string('t_recruiter', 225)->nullable();
            $table->string('t_supportexe', 225)->nullable();
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
        Schema::dropIfExists('tic_ticket_number_duplicates');
    }
};
