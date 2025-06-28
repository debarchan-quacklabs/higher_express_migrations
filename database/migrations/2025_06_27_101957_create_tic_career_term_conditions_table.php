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
        Schema::create('tic_career_term_condition', function (Blueprint $table) {
            $table->id('id'); // Primary key, auto-increment, unsigned big integer

            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            $table->tinyInteger('cloud_id')->nullable(); // No length used in Laravel
            $table->tinyInteger('term_conditions_status')->nullable();
            $table->longText('term_conditions_description')->nullable();
            $table->tinyInteger('privacy_policy_status')->nullable();
            $table->longText('privacy_policy_description')->nullable();
            $table->tinyInteger('security_status')->nullable();
            $table->longText('security_descriptions')->nullable();

            $table->date('date')->nullable(); // Custom audit fields
            $table->time('time')->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();

            $table->timestamp('deleted_at')->nullable(); // Soft delete
            $table->timestamps();                        // created_at & updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_career_term_conditions');
    }
};
