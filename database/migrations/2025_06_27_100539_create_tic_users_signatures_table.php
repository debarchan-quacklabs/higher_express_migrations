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
    Schema::create('tic_users_signature', function (Blueprint $table) {
        $table->id('signature_id'); // Primary Key
         // Common fields
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();

        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('company_id')->nullable();
        $table->unsignedInteger('location_id')->nullable();

        $table->text('address')->nullable();
        $table->string('city')->nullable();
        $table->string('postcode', 10)->nullable();
        $table->string('state', 30)->nullable();
        $table->string('country', 30)->nullable();

        $table->string('date', 30)->nullable();
        $table->string('time', 30)->nullable();
        $table->string('ip', 30)->nullable();
        $table->string('browser', 30)->nullable();

       
        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_users_signatures');
    }
};
