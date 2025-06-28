<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
{
    Schema::create('tic_user_document', function (Blueprint $table) {
        $table->id('document_id');

        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('u_id')->nullable();
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('file_name')->nullable();
        $table->string('category', 100)->nullable();
        $table->string('type', 30)->nullable();
        $table->string('size', 30)->nullable();

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
        Schema::dropIfExists('tic_user_documents');
    }
};
