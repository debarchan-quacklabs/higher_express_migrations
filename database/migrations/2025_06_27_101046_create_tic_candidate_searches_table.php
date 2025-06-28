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
        Schema::create('tic_candidate_search', function (Blueprint $table) {
            $table->id('search_id');

            $table->unsignedInteger('u_id')->nullable();    // User ID
            $table->unsignedInteger('role_id')->nullable(); // Role ID
            $table->unsignedInteger('module_id')->nullable();
            $table->string('search_key')->nullable();

            $table->integer('cloud_id')->nullable();
            $table->unsignedInteger('user_id')->nullable();

            $table->longText('gen_url')->nullable();
            $table->string('any_keyword')->nullable();
            $table->string('mandatory_keyword')->nullable();
            $table->string('excluded_keyword')->nullable();
            $table->string('search_location')->nullable();
            $table->string('prefered_location')->nullable();
            $table->string('search_slug')->default('Recent');

            // Audit fields
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_candidate_searches');
    }
};
