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
        Schema::create('tic_career_application', function (Blueprint $table) {
            $table->id('id'); // Automatically creates unsigned big integer primary key named `id`

            $table->unsignedInteger('u_id')->nullable();      // User ID
            $table->unsignedInteger('role_id')->nullable();   // Role ID
            $table->unsignedInteger('module_id')->nullable(); // Module ID

            $table->tinyInteger('cloud_id')->nullable(); // Laravel does not support length for tinyInteger
            $table->string('title')->nullable();
            $table->string('sub_title')->nullable();
            $table->longText('enabled_sections')->nullable();
            $table->integer('enable_screening')->nullable(); // Removed length `,11`

            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('ip')->nullable();
            $table->string('browser')->nullable();

            $table->timestamp('deleted_at')->nullable(); // Soft delete

            $table->timestamps(); // created_at & updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_career_applications');
    }
};
