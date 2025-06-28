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
    Schema::create('tic_questionnaire_question_set', function (Blueprint $table) {
        $table->id('question_set_id'); // Primary key
         $table->unsignedInteger('u_id')->nullable();
          $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('cloud_id')->nullable();
        $table->string('question_set_name')->nullable();
        $table->enum('has_trigger_delay', ['Yes', 'No'])->default('No');
        $table->string('trigger_delay', 50)->nullable();
        $table->unsignedInteger('created_by');
        $table->date('date')->nullable();
        $table->string('time')->nullable();
         $table->string('ip')->nullable();
        $table->string('browser')->nullable();
        $table->timestamps(); // Adds created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_questionnaire_question_sets');
    }
};
