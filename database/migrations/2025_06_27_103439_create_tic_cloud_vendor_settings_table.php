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
        Schema::create('tic_cloud_vendor_setting', function (Blueprint $table) {
            $table->id('vendor_setting_id'); // Primary key

            // Standard columns
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->string('vendor_unique_id', 11)->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('created_by')->nullable();

            // Vendor details
            $table->enum('source', ['Web', 'Internal'])->default('Internal');
            $table->string('vendor_name')->nullable();
            $table->string('vendor_website')->nullable();
            $table->string('pan_number', 20)->nullable();
            $table->unsignedInteger('sub_user_limit')->nullable();
            $table->string('organisation_info')->nullable();
            $table->string('nos_employess')->nullable();
            $table->text('prefer_zone')->nullable();
            $table->text('prefer_category')->nullable();
            $table->enum('vendor_status', ['Active', 'Inactive'])->default('Active');

            // Audit fields
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
        Schema::dropIfExists('tic_cloud_vendor_settings');
    }
};
