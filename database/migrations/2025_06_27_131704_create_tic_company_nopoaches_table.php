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
        Schema::create('tic_company_nopoach', function (Blueprint $table) {
            $table->id('company_nopoach_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->string('company_nopoach_name', 255);
            $table->unsignedBigInteger('cloud_id')->nullable();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedInteger('no_poach_days')->default(0);
            $table->string('no_poach_clause', 555)->nullable();

            // Required extra columns
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
        Schema::dropIfExists('tic_company_nopoaches');
    }
};
