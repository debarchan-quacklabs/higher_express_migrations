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
        Schema::create('tic_company', function (Blueprint $table) {
            $table->id('company_id'); // Primary key

            // Common fields
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            // Company-specific fields
            $table->string('company_key')->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('parent_company_id')->default(0);
            $table->unsignedInteger('created_by')->nullable();
            $table->enum('company_status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');

            $table->string('client_name', 225)->nullable();
            $table->unsignedInteger('industry_id')->nullable();
            $table->string('industry', 225)->nullable();
            $table->string('website', 225)->nullable();
            $table->string('company_rating', 225)->default('3.0');
            $table->longText('about_client')->nullable();
            $table->text('company_tags')->nullable();
            $table->text('distribution_channels')->nullable();
            $table->string('logo', 225)->nullable();
            $table->string('profile', 225)->nullable();

            // Social media links
            $table->string('facebook', 225)->nullable();
            $table->string('twitter', 225)->nullable();
            $table->string('linkedin', 225)->nullable();
            $table->string('instagram', 225)->nullable();
            $table->string('youtube', 255)->nullable();

            // Contract & file info
            $table->string('contract_start', 255)->nullable();
            $table->string('contract_end', 255)->nullable();
            $table->string('file', 255)->nullable();
            $table->string('assign_acc_manager', 255)->nullable();
            $table->string('expiry', 255)->nullable();

            // ID & document flags
            $table->enum('have_any_id', ['Yes', 'No'])->default('No');
            $table->enum('adhar', ['Yes', 'No'])->default('No');
            $table->enum('passport', ['Yes', 'No'])->default('No');
            $table->enum('pan', ['Yes', 'No'])->default('No');
            $table->enum('dl', ['Yes', 'No'])->default('No');
            $table->enum('voter_id', ['Yes', 'No'])->default('No');

            // Portal & job code
            $table->enum('talent_portal', ['Yes', 'No'])->default('Yes');
            $table->enum('has_job_code', ['Yes', 'No'])->default('No');
            $table->string('ticket_type', 255)->nullable();
            $table->string('link', 255)->nullable();
            $table->enum('default', ['Yes', 'No'])->default('No');

            // Additional company info
            $table->string('founded_in', 100)->nullable();
            $table->string('ownership', 100)->nullable();
            $table->string('annual_turnover', 100)->nullable();
            $table->string('employee_count', 100)->nullable();
            $table->string('nature_of_business', 100)->nullable();
            $table->string('company_type', 100)->nullable();

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
        Schema::dropIfExists('tic_companies');
    }
};
