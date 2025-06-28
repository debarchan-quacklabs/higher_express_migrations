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
        Schema::create('tic_cloud_company_setting', function (Blueprint $table) {
            $table->id('comp_setting_id'); // Primary key with custom name

            // Standard tracking columns
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            // Company setting fields
            $table->string('client_unique_id')->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('created_by')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->string('company_name')->nullable();
            $table->string('pan_number', 20)->nullable();
            $table->unsignedInteger('sub_user_limit')->nullable();
            $table->unsignedInteger('limit_used')->default(0);
            $table->enum('client_status', ['Active', 'Inactive'])->default('Active');

            // Standard audit fields
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
        Schema::dropIfExists('tic_cloud_company_settings');
    }
};
