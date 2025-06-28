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
        Schema::create('cloud_master_login_logs', function (Blueprint $table) {
            $table->id('master_logs_id');
            $table->unsignedInteger('u_id')->nullable();    // User ID: int(11) DEFAULT NULL
            $table->unsignedInteger('role_id')->nullable(); // Role ID: int(11) DEFAULT NULL
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('access_cloud_id')->nullable();
            $table->unsignedInteger('access_uid')->nullable();
            $table->text('access_notes')->nullable();
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('cloud_master_login_logs');
    }
};
