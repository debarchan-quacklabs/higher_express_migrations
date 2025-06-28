<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('tic_questionnaire_applicant_set', function (Blueprint $table) {
        $table->id('questionnaire_set_response_id'); // Primary Key
        $table->unsignedInteger('u_id')->nullable();
          $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('job_id')->nullable();
        $table->unsignedInteger('job_owner_id')->nullable();
        $table->unsignedInteger('recruiter_id')->nullable();
        $table->unsignedInteger('applicant_id')->nullable();
        $table->unsignedInteger('question_set_id')->nullable();
        
        $table->enum('applicant_response_status', ['Pass', 'Fail', 'NA'])->default('NA');
        $table->enum('delay_trigger', ['Yes', 'No'])->default('No');
        $table->enum('notify_status', ['Notified', 'Pending'])->default('Pending');

        $table->string('date', 15)->nullable();
        $table->string('time', 15)->nullable();
        $table->string('ip', 50)->nullable();
        $table->string('browser', 50)->nullable();

        $table->timestamps(); // Optional if you want created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_questionnaire_applicant_sets');
    }
};
