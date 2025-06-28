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
    Schema::create('tic_job_scorecard', function (Blueprint $table) {
        $table->id('scorecard_id'); // Primary key
        $table->unsignedInteger('cloud_id')->nullable();
         $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
                $table->unsignedInteger('module_id')->nullable();

        $table->string('options')->nullable();
        $table->enum('options_output', ['Rating', 'RatingComment'])->default('Rating');
        $table->unsignedInteger('scorecard_set_id')->nullable();
        $table->string('date', 225)->nullable();
        $table->string('time', 225)->nullable();
        $table->string('ip', 225)->nullable();
        $table->string('browser', 225)->nullable();
        $table->timestamps(); // created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_job_scorecards');
    }
};
