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
    Schema::create('tic_notification', function (Blueprint $table) {
        $table->id('notification_id'); // Primary Key

        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('u_id')->nullable();
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('user_name')->nullable();
        $table->string('notification_type')->nullable();
        $table->text('notification_message')->nullable();
        $table->text('notification_link')->nullable();
        $table->enum('read_status', ['read', 'unread'])->default('unread');
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
        Schema::dropIfExists('tic_notifications');
    }
};
