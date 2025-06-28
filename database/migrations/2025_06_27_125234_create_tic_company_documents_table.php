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
        Schema::create('tic_company_documents', function (Blueprint $table) {
            $table->id('comp_doc_id'); // Primary key

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('company_id')->nullable();

            $table->string('doc_for', 255)->nullable();
            $table->string('doc_file', 255)->nullable();
            $table->string('doc_file_name', 255)->nullable();
            $table->string('file_size', 255)->nullable();
            $table->string('file_ext', 255)->nullable();

            // Audit fields
            $table->string('date', 225)->nullable();
            $table->string('time', 225)->nullable();
            $table->string('ip', 225)->nullable();
            $table->string('browser', 225)->nullable();

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_documents');
    }
};
