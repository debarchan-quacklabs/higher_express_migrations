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

        Schema::create('cloud_allowed_modules', function (Blueprint $table) {
            $table->id('cam_id')->primary();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('u_id')->nullable();    // User ID: int(11) DEFAULT NULL
            $table->unsignedInteger('role_id')->nullable(); // Role ID: int(11) DEFAULT NULL
            $table->unsignedInteger('module_id')->nullable();
            $table->enum('arise_modules', ['Yes', 'No'])->default('No');
            $table->enum('aspire_modules', ['Yes', 'No'])->default('No');
            $table->enum('transpire_modules', ['Yes', 'No'])->default('No');
            $table->enum('retention_modules', ['Yes', 'No'])->default('No');
            $table->enum('vendor_modules', ['Yes', 'No'])->default('No');
            $table->enum('pride_modules', ['Yes', 'No'])->default('No');
            $table->string('date', 191)->nullable();
            $table->string('time', 191)->nullable();
            $table->string('ip', 191)->nullable();
            $table->string('browser', 191)->nullable();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloud_allowed_modules');
    }
};
