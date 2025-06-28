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
        Schema::create('tic_temp_resume', function (Blueprint $table) {
            $table->id('temp_resume_id');
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->string('resume_name', 255)->nullable();
            $table->string('date', 20)->nullable();
            $table->string('time', 20)->nullable();
            $table->string('ip', 20)->nullable();
            $table->string('browser', 20)->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_temp_resumes');
    }
};
