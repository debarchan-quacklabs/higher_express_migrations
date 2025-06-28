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
    Schema::create('tic_invite_users', function (Blueprint $table) {
        $table->id('invite_id'); // Primary key
         $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
                $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('invite_cloud_id')->nullable();
        $table->string('invite_name')->nullable();
        $table->string('invite_email')->nullable();
        $table->unsignedInteger('invite_by_uid')->nullable();
        $table->string('invite_by_username')->nullable();
        $table->enum('is_link_open', ['Yes', 'No'])->default('No');
        $table->enum('is_sign_up', ['Yes', 'No'])->default('No');
        $table->string('date', 50)->nullable();
        $table->string('time', 50)->nullable();
        $table->string('ip', 50)->nullable();
        $table->string('browser', 50)->nullable();

        $table->timestamps(); // created_at and updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_invite_users');
    }
};
