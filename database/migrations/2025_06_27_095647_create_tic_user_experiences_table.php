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
    Schema::create('tic_user_experience', function (Blueprint $table) {
        $table->id('experience_id'); // Primary key

        $table->unsignedInteger('u_id')->nullable();
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('job_title')->nullable();
        $table->unsignedInteger('company_name')->nullable();

        $table->string('exp_year_from', 30)->nullable();
        $table->string('exp_year_to', 30)->nullable();
        $table->longText('job_description')->nullable();

        $table->string('date', 30)->nullable();
        $table->string('time', 30)->nullable();
        $table->string('ip', 30)->nullable();
        $table->string('browser', 30)->nullable();

        $table->timestamps(); // created_at & updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_user_experiences');
    }
};
