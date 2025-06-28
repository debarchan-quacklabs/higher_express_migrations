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
        Schema::create('tic_cloud_history', function (Blueprint $table) {
            $table->id('cloud_history_id'); // Primary key

                                                              // Standard tracking columns
            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            // History-related columns
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();
            $table->string('user_name')->nullable();
            $table->string('date', 30)->nullable();    // Audit date
            $table->string('time', 30)->nullable();    // Audit time
            $table->string('ip', 30)->nullable();      // Audit IP
            $table->string('browser', 30)->nullable(); // Audit browser
            $table->string('activity_type')->nullable();
            $table->string('activity_notes')->nullable();
            $table->unsignedTinyInteger('super_admin')->default(0); // 0 = No, 1 = Yes

            $table->timestamps(); // created_at, updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_cloud_histories');
    }
};
