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
        Schema::create('tic_demand_information', function (Blueprint $table) {
            $table->id('d_info_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('applicant_id')->nullable();
            $table->unsignedInteger('recruiter')->nullable();
            $table->unsignedInteger('demand_by')->nullable();

            $table->longText('notes')->nullable();
            $table->enum('auto_reject', ['Yes', 'No'])->default('No');
            $table->unsignedInteger('reject_interval')->nullable();
            $table->enum('demand_status', ['Pending', 'Completed', 'Rejected'])->default('Pending');
            $table->string('auto_reject_on', 50)->nullable();

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
        Schema::dropIfExists('tic_demand_information');
    }
};
