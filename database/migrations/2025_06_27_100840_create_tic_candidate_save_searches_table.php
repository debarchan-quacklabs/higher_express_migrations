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
        Schema::create('tic_candidate_save_search', function (Blueprint $table) {
            $table->id('save_search_id');

            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->string('save_search_key', 50)->nullable();
            $table->text('search_folder_name')->nullable();
            $table->longText('gen_url')->nullable();
            $table->unsignedInteger('u_id')->nullable();
            $table->integer('cloud_id')->nullable();
            $table->text('keywords')->nullable();
            $table->text('location')->nullable();
            $table->string('salary')->nullable();
            $table->string('experience')->nullable();
            $table->enum('shared_search', ['Yes', 'No'])->default('No');

            // Audit fields
            $table->string('date', 20)->nullable();
            $table->string('time', 20)->nullable();
            $table->string('ip', 20)->nullable();
            $table->string('browser', 20)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_candidate_save_searches');
    }
};
