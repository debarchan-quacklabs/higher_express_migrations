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
    Schema::create('tic_user_login_history', function (Blueprint $table) {
        $table->id('login_history_id'); // Primary key

        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('u_id')->nullable();
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();

        $table->string('login_date')->nullable();
        $table->string('login_time')->nullable();
        $table->string('logout_date', 30)->nullable();
        $table->string('logout_time', 30)->nullable();

        $table->string('login_ip')->nullable();
        $table->string('login_browser')->nullable();
        $table->string('login_os')->nullable();
        $table->string('login_city')->nullable();
        $table->string('login_state')->nullable();
        $table->string('login_zipcode')->nullable();
        $table->string('login_country')->nullable();

        $table->string('coordinate_x')->nullable();
        $table->string('coordinate_y')->nullable();

        $table->enum('login_status', ['0', '1'])->default('1');
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
        Schema::dropIfExists('tic_user_login_histories');
    }
};
