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
        Schema::create('tic_cloud_compliances', function (Blueprint $table) {
            $table->id('cloud_compliances_id'); // Primary key

                                                              // Standard columns
            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            // Compliance-related columns
            $table->unsignedInteger('cloud_id')->nullable();
            $table->string('EEO_survey_report')->nullable();
            $table->string('OFCCP_survey')->nullable();
            $table->string('GDPR_enabled')->nullable();
            $table->string('GDPR_link')->nullable();
            $table->string('keep_GDPR_status')->nullable();
            $table->string('profile_expiry')->nullable();
            $table->string('privacy_url')->nullable();

            // Audit columns
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();

            $table->timestamps(); // created_at, updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_cloud_compliances');
    }
};
