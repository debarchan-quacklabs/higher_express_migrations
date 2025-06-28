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
        Schema::create('demo', function (Blueprint $table) {
            $table->id('demo_id');
            $table->unsignedInteger('u_id')->nullable();    // User ID: int(11) DEFAULT NULL
            $table->unsignedInteger('role_id')->nullable(); // Role ID: int(11) DEFAULT NULL
            $table->unsignedInteger('module_id')->nullable();
            $table->longText('name');

           

            // Audit columns
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
        Schema::dropIfExists('demos');
    }
};
