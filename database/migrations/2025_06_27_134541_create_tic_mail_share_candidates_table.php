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
    Schema::create('tic_mail_share_candidates', function (Blueprint $table) {
        $table->id('share_id'); 
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
                $table->unsignedInteger('module_id')->nullable();

        $table->unsignedInteger('cloud_id')->nullable();
        $table->string('job_id', 225)->nullable();
        $table->string('applicant_str', 225)->nullable();
        $table->text('share_to')->nullable();
        $table->text('cc_to')->nullable();
        $table->text('bcc_to')->nullable();
        $table->enum('selfmail', ['Yes', 'No'])->default('No');
        $table->string('self_email_address')->nullable();
        $table->text('subjects')->nullable();
        $table->string('tracker_used')->nullable();
        $table->string('resume_used')->nullable();
        $table->enum('attachment_type', ['Zip', 'Individual', 'NA'])->default('NA');
        $table->longText('messages')->nullable();
         $table->string('date', 225)->nullable();
        $table->string('time', 225)->nullable();
        $table->string('ip', 225)->nullable();
        $table->string('browser', 225)->nullable();
        
        $table->timestamps(); // created_at and updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_mail_share_candidates');
    }
};
