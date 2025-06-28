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
        Schema::create('tic_company_department', function (Blueprint $table) {
            $table->id('comp_dept_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('cloud_id')->nullable();

            $table->string('depart_name', 255)->nullable();

            // Audit fields
            $table->string('date', 255)->nullable();
            $table->string('time', 255)->nullable();
            $table->string('ip', 255)->nullable();
            $table->string('browser', 255)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_departments');
    }
};
