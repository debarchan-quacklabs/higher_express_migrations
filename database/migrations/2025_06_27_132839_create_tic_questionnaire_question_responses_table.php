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
    Schema::create('tic_questionnaire_question_response', function (Blueprint $table) {
        $table->id('response_id'); // Primary Key
        $table->unsignedInteger('u_id')->nullable();
          $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('applicant_key', 100)->nullable();
        $table->string('job_id', 30)->nullable();
        $table->unsignedInteger('recruiter')->nullable();
        $table->unsignedInteger('q_set_id')->nullable();
        $table->unsignedInteger('question_id')->nullable();
        $table->unsignedInteger('q_no')->nullable();

        $table->text('q_title')->nullable();
        $table->text('q_response')->nullable();
        $table->enum('answer_status', ['Right', 'Wrong', 'Na'])->default('Na');
        $table->string('q_type')->nullable();

        $table->string('date', 50)->nullable();
        $table->string('time', 50)->nullable();
        $table->string('ip', 50)->nullable();
        $table->string('browser', 50)->nullable();

        $table->timestamps(); // created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_questionnaire_question_responses');
    }
};
