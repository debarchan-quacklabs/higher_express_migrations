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
    Schema::create('tic_user_visit_records', function (Blueprint $table) {
        $table->id('visit_id'); 

        $table->unsignedInteger('cloud_id')->nullable();
        $table->longText('visit_path')->nullable();
        $table->unsignedInteger('visited_by')->nullable();
        $table->string('visited_by_name')->nullable();
          // Audit fields
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();

        $table->string('date', 255)->nullable();
        $table->string('time', 255)->nullable();
        $table->string('ip', 255)->nullable();
        $table->string('browser', 255)->nullable();

        $table->timestamps(); 
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_user_visit_records');
    }
};
