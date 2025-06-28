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
        Schema::create('tic_company_contacts', function (Blueprint $table) {
            $table->id('contact_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->string('contact_key', 255)->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->string('location_id', 11)->nullable();
            $table->unsignedInteger('created_by')->default(0);

            $table->string('first_name', 225)->nullable();
            $table->string('last_name', 225)->nullable();
            $table->string('designation', 225)->nullable();
            $table->string('user_type', 225)->nullable();
            $table->string('contact_avatar', 255)->nullable();
            $table->string('phone', 225)->nullable();
            $table->string('email', 225)->nullable();
            $table->string('country_code', 10)->default('91');
            $table->string('country_code_alt', 10)->default('91');
            $table->string('phone1', 255)->nullable();
            $table->string('email1', 255)->nullable();

            $table->string('facebook', 225)->nullable();
            $table->string('twitter', 225)->nullable();
            $table->string('linkedin', 225)->nullable();
            $table->string('instagram', 225)->nullable();

            $table->enum('default', ['Yes', 'No'])->default('No');

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
        Schema::dropIfExists('tic_company_contacts');
    }
};
