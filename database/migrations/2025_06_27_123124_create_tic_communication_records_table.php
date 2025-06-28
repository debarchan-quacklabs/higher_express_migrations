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
        Schema::create('tic_communication_records', function (Blueprint $table) {
            $table->id('com_rec_id'); // Primary key

            // Common user/module tracking
            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            // Communication-specific fields
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('history_id')->nullable();
            $table->string('com_type')->nullable();
            $table->longText('com_content')->nullable();
            $table->string('send_msg_id')->nullable();
            $table->string('output_status')->nullable();

            // Audit fields
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();

            $table->timestamps(); // created_at and updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_communication_records');
    }
};
