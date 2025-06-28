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
    Schema::create('z_agreement_reminder_settings', function (Blueprint $table) {
        $table->id('id'); 

        $table->unsignedBigInteger('cloud_id');

        // Reminder 1
        $table->unsignedInteger('reminder_1')->default(0);
        $table->unsignedInteger('daysbefore_1')->default(0);
        $table->unsignedInteger('email_1')->default(0);
        $table->unsignedInteger('whatsapp_1')->default(0);
        $table->unsignedInteger('sms_1')->default(0);
        $table->unsignedInteger('inapp_1')->default(0);
        $table->text('receipient_1')->nullable();

        // Reminder 2
        $table->unsignedInteger('reminder_2')->default(0);
        $table->unsignedInteger('daysbefore_2')->default(0);
        $table->unsignedInteger('email_2')->default(0);
        $table->unsignedInteger('whatsapp_2')->default(0);
        $table->unsignedInteger('sms_2')->default(0);
        $table->unsignedInteger('inapp_2')->default(0);
        $table->text('receipient_2')->nullable();

        // Reminder 3
        $table->unsignedInteger('reminder_3')->default(0);
        $table->unsignedInteger('daysbefore_3')->default(0);
        $table->unsignedInteger('email_3')->default(0);
        $table->unsignedInteger('whatsapp_3')->default(0);
        $table->unsignedInteger('sms_3')->default(0);
        $table->unsignedInteger('inapp_3')->default(0);
        $table->text('receipient_3')->nullable();

        // Reminder 4
        $table->unsignedInteger('reminder_4')->default(0);
        $table->unsignedInteger('daysbefore_4')->default(0);
        $table->unsignedInteger('email_4')->default(0);
        $table->unsignedInteger('whatsapp_4')->default(0);
        $table->unsignedInteger('sms_4')->default(0);
        $table->unsignedInteger('inapp_4')->default(0);
        $table->text('receipient_4')->nullable();

        // Reminder 5
        $table->unsignedInteger('reminder_5')->default(0);
        $table->unsignedInteger('daysbefore_5')->default(0);
        $table->unsignedInteger('email_5')->default(0);
        $table->unsignedInteger('whatsapp_5')->default(0);
        $table->unsignedInteger('sms_5')->default(0);
        $table->unsignedInteger('inapp_5')->default(0);
        $table->text('receipient_5')->nullable();

        // Reminder 6
        $table->unsignedInteger('reminder_6')->default(0);
        $table->unsignedInteger('daysbefore_6')->default(0);
        $table->unsignedInteger('email_6')->default(0);
        $table->unsignedInteger('whatsapp_6')->default(0);
        $table->unsignedInteger('sms_6')->default(0);
        $table->unsignedInteger('inapp_6')->default(0);
        $table->text('receipient_6')->nullable();

        

        $table->string('date', 191)->nullable();
        $table->string('time', 191)->nullable();
        $table->string('ip', 191)->nullable();
        $table->string('browser', 191)->nullable();

        $table->timestamps(); 
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_agreement_reminder_settings');
    }
};
