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
        Schema::create('tic_cloud_integration', function (Blueprint $table) {
            $table->id('id'); // Primary key column will automatically be named `id`

            // Standard columns
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            // Integration-related fields
            $table->unsignedInteger('cloud_id');
            $table->unsignedInteger('intg_id');
            $table->text('cloud_intg_config');
            $table->unsignedTinyInteger('cloud_intg_status')->default(0); // 0 = Inactive, 1 = Active

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
        Schema::dropIfExists('tic_cloud_integrations');
    }
};
