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
        Schema::create('tic_additional_question_set', function (Blueprint $table) {
            $table->id('additional_question_set_id')->primary();
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->string('cloud_id', 255)->nullable();
            $table->integer('scorecard_id')->nullable();
            $table->integer('created_by')->nullable();
            $table->date('date')->nullable();
            $table->string('time', 255)->nullable();

            // Required common columns

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
        Schema::dropIfExists('tic_additional_question_sets');
    }
};
