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
    Schema::create('tic_transpire_lead_history', function (Blueprint $table) {
        $table->id('transpire_lead_history_id'); // Primary Key

        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('lead_id')->nullable();
        $table->unsignedInteger('u_id')->default(0);
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();

        $table->string('activity_type')->nullable();
        $table->text('activity_notes')->nullable();

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
        Schema::dropIfExists('tic_transpire_lead_histories');
    }
};
