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
        Schema::create('tic_cloud', function (Blueprint $table) {
            $table->id('cloud_id'); // Primary key with custom name

                                                              // Standard user tracking columns
            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            // Cloud details
            $table->string('cloud_key')->nullable();
            $table->string('company_name', 225)->nullable();
            $table->string('email', 225)->nullable();
            $table->integer('country_code')->default(91);
            $table->string('phone', 225)->nullable();
            $table->string('user_type', 225)->nullable();
            $table->string('no_of_license', 225)->nullable();
            $table->integer('license_used')->default(0);
            $table->string('expiry_date', 225)->nullable();
            $table->string('account_type', 225)->nullable();
            $table->unsignedInteger('industry_id')->nullable();
            $table->string('industry', 225)->nullable();
            $table->string('city', 255)->nullable();
            $table->string('state', 255)->nullable();
            $table->string('state_name', 255)->nullable();
            $table->string('country', 255)->nullable();
            $table->string('country_name', 255)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('postcode', 255)->nullable();
            $table->string('GSTIN', 255)->nullable();

            // Time, currency, language
            $table->unsignedInteger('time_zone_id')->nullable();
            $table->string('time_zone', 225)->nullable();
            $table->unsignedInteger('currency_id')->nullable();
            $table->string('currency', 225)->nullable();
            $table->unsignedInteger('language_id')->nullable();
            $table->string('language', 225)->nullable();

            $table->string('created_by')->nullable();
            $table->unsignedInteger('cloud_user_id')->nullable();

            // Standard audit columns
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
        Schema::dropIfExists('tic_clouds');
    }
};
