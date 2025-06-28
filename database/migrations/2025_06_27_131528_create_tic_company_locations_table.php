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
        Schema::create('tic_company_locations', function (Blueprint $table) {
            $table->id('location_id'); // Primary key as provided

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->string('branch_location_key', 255)->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();
            $table->unsignedInteger('created_by')->default(0);
            $table->string('friendly_name', 225)->nullable();
            $table->string('city', 225)->nullable();
            $table->string('country', 225)->nullable();
            $table->string('country_name', 255)->nullable();
            $table->string('address', 225)->nullable();
            $table->string('postcode', 225)->nullable();
            $table->unsignedInteger('region_id')->nullable();
            $table->string('state', 225)->nullable();
            $table->string('state_name', 255)->nullable();
            $table->text('g_map_url')->nullable();
            $table->text('g_map_code')->nullable();
            $table->enum('default', ['Yes', 'No'])->default('No');

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
        Schema::dropIfExists('tic_company_locations');
    }
};
