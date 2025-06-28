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
        Schema::create('tic_additional_questions', function (Blueprint $table) {
            $table->id('addtional_question_id')->primary();
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable(); 
            $table->string('cloud_id')->nullable();
            $table->text('question')->nullable();
            $table->string('field_type')->nullable();
            $table->enum('is_required', ['Yes', 'No'])->default('No');
            $table->enum('automation', ['Yes', 'No'])->default('No');
            $table->string('sequence_question')->nullable();
            $table->integer('additional_question_set_id')->nullable();

            // Required common columns

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
        Schema::dropIfExists('tic_additional_questions');
    }
};
