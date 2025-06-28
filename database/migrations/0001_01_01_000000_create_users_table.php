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
    Schema::create('users', function (Blueprint $table) {
        $table->id('id');

        $table->unsignedInteger('cloud_id')->nullable();
        $table->string('name')->nullable();
        $table->string('first_name')->nullable();
        $table->string('last_name')->nullable();
        $table->string('email')->unique();
        $table->string('country_code', 10)->default('91');
        $table->string('phone')->nullable();
        $table->string('designation')->nullable();
        $table->string('user_type')->nullable();
        $table->string('role')->nullable();

        $table->unsignedInteger('dept_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('team_id')->nullable();
        $table->unsignedInteger('branch_id')->nullable();
        $table->unsignedInteger('region_id')->nullable();
        $table->unsignedInteger('country_id')->nullable();

        $table->string('mapped_id')->nullable();
        $table->string('branch_name')->nullable();

        $table->integer('email_otp')->nullable();
        $table->string('link_expired')->default('');
        $table->integer('mobile_otp')->nullable();

        $table->enum('block_login', ['Yes', 'No']);
        $table->enum('pwd_alert', ['Yes', 'No'])->default('No');
        $table->enum('first_login', ['Yes', 'No'])->default('Yes');
        $table->enum('tour_initiate', ['Yes', 'No'])->default('No');
        $table->string('tour_step')->default('Not Started');
        $table->enum('system_check', ['Yes', 'No'])->default('No');
        $table->string('signup_stepper')->default('Step1');
        $table->enum('sign_up_from', ['External', 'Internal'])->default('Internal');
        $table->enum('update_notice', ['Yes', 'No'])->default('No');
        $table->enum('show_payout', ['Yes', 'No'])->default('No');

        $table->string('dob')->nullable();
        $table->string('profile_image')->nullable();
        $table->enum('email_verify', ['Yes', 'No'])->default('Yes');
        $table->timestamp('email_verified_at')->nullable();

        $table->string('password');
        $table->enum('user_status', ['Active', 'Inactive'])->default('Active');
        $table->enum('logged_in_status', ['Login', 'Logout'])->default('Logout');

        $table->string('last_login_date')->nullable();
        $table->string('last_login_time')->nullable();
       $table->string('date', 191)->nullable();                  
        $table->string('time', 191)->nullable();                  
        $table->string('ip', 191)->nullable();
        $table->string('browser', 191)->nullable();
        $table->string('remember_token',100)->nullable(); 

        $table->timestamps(); // created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
      
    }
};
