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
        Schema::create('tic_company_factsheet', function (Blueprint $table) {
            $table->id('factsheet_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('job_id')->nullable();

            $table->string('heading_color', 50)->nullable();
            $table->text('factsheet_name')->nullable();
            $table->longText('config_list')->nullable();

            // Standard tracking fields
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 50)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_factsheets');
    }
};
