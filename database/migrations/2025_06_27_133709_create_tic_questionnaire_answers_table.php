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
    Schema::create('tic_questionnaire_answer', function (Blueprint $table) {
        $table->id('answer_id'); // Primary key
         $table->unsignedInteger('u_id')->nullable();
          $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('cloud_id')->nullable();
        $table->string('question_set_id')->nullable();
        $table->string('question_id')->nullable();
        $table->string('field_type')->nullable();
        $table->string('options')->nullable();
        $table->string('option_response')->nullable();
        $table->string('date', 15)->nullable();
        $table->string('time', 15)->nullable();
        $table->string('ip', 50)->nullable();
        $table->string('browser', 50)->nullable();
        $table->timestamps(); // Optional: adds created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_questionnaire_answers');
    }
};
