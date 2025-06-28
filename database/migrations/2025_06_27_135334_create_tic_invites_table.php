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
    Schema::create('tic_invites', function (Blueprint $table) {
        $table->id('invite_id'); // Primary key
         $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
                $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('cloud_id')->nullable();
        $table->string('name')->nullable();
        $table->string('email')->nullable();
        $table->string('user_type')->nullable();
        $table->string('invite_by')->nullable();
        $table->string('invite_by_username')->nullable();
        $table->enum('is_link_open', ['Yes', 'No'])->default('No');
        $table->enum('is_sign_up', ['Yes', 'No'])->default('No');
        $table->string('date')->nullable();
        $table->string('time')->nullable();
        $table->string('ip')->nullable();
        $table->string('browser')->nullable();
        $table->string('status')->default('Pending');

        $table->timestamps(); // created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_invites');
    }
};
