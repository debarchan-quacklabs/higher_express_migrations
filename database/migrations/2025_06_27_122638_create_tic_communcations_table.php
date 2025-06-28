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
        Schema::create('tic_communcations', function (Blueprint $table) {
            $table->id('com_id'); // Primary key

            // Standard fields
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            // Communication preferences
            $table->unsignedInteger('cloud_id')->nullable();
            $table->enum('sms', ['On', 'Off'])->default('Off');
            $table->enum('whatsapp', ['On', 'Off'])->default('Off');

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
        Schema::dropIfExists('tic_communcations');
    }
};
