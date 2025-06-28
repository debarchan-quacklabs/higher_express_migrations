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
        Schema::create('tic_company_agreements', function (Blueprint $table) {
            $table->id('company_agreements_id'); // Primary key

                                                              // Common metadata fields
            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            // Company agreement-specific fields
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->string('contract_start', 255)->nullable();
            $table->string('contract_end', 255)->nullable();
            $table->string('agreement_file', 255)->nullable();
            $table->string('agreement_file_name', 255)->nullable();
            $table->string('file_size', 255)->nullable();
            $table->string('file_ext', 255)->nullable();

            // Audit fields
            $table->string('date', 225)->nullable();
            $table->string('time', 225)->nullable();
            $table->string('ip', 225)->nullable();
            $table->string('browser', 225)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_agreements');
    }
};
