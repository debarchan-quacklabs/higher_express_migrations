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
    Schema::create('tic_tmp_user', function (Blueprint $table) {
        $table->id('tmp_id'); 
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->string('email')->nullable();
        $table->string('designation')->nullable();
        $table->unsignedInteger('tmp_otp')->nullable();
        $table->string('mobile')->nullable();
        $table->string('password')->nullable();

        $table->string('date')->nullable();
        $table->string('time')->nullable();
        $table->string('ip')->nullable();
        $table->string('browser')->nullable();

        $table->timestamps(); // created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_tmp_users');
    }
};
