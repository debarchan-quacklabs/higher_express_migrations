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
    Schema::create('tic_transpire_lead', function (Blueprint $table) {
        $table->id('transpire_lead_id'); // Primary Key
          $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->string('company_name')->nullable();
        $table->string('phone', 50)->nullable();
        $table->string('email', 50)->nullable();
        $table->string('location', 100)->nullable();
        $table->string('profile_image', 100)->nullable();
        $table->string('lead_score', 30)->nullable();
        $table->text('lead_tags')->nullable();
        $table->string('lead_source', 100)->nullable();
        $table->string('create_date', 30)->nullable();
        $table->string('create_time', 30)->nullable();
         $table->string('date')->nullable();
        $table->string('time')->nullable();
        $table->string('ip', 191)->nullable();
        $table->string('browser', 191)->nullable();

        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_transpire_leads');
    }
};
