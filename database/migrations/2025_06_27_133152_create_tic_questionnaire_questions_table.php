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
    Schema::create('tic_questionnaire_questions', function (Blueprint $table) {
        $table->id('question_id'); // Primary Key
       $table->unsignedInteger('u_id')->nullable();
          $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('cloud_id')->nullable();
        $table->text('question')->nullable();
        $table->string('field_type')->nullable();
        $table->enum('is_required', ['Yes', 'No'])->default('No');
        $table->enum('automation', ['Yes', 'No'])->default('No');
        $table->unsignedInteger('question_set_id')->nullable();
        $table->string('date', 50)->nullable();
        $table->string('time', 50)->nullable();
        $table->string('ip', 50)->nullable();
        $table->string('browser', 50)->nullable();
        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_questionnaire_questions');
    }
};
