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
        Schema::create('cloud_payout_configure', function (Blueprint $table) {
            $table->id('config_id');
            $table->unsignedInteger('u_id')->nullable();    // User ID: int(11) DEFAULT NULL
            $table->unsignedInteger('role_id')->nullable(); // Role ID: int(11) DEFAULT NULL
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->enum('admin', ['Yes', 'No'])->default('No');
            $table->enum('emerge', ['Yes', 'No'])->default('No');
            $table->enum('desire', ['Yes', 'No'])->default('No');
            $table->enum('guide', ['Yes', 'No'])->default('No');
            $table->enum('partner', ['Yes', 'No'])->default('No');
            $table->enum('referral', ['Yes', 'No'])->default('No');
            $table->enum('arise', ['Yes', 'No'])->default('No');
            $table->enum('aspire', ['Yes', 'No'])->default('No');
            $table->enum('swarna', ['Yes', 'No'])->default('No');
            $table->enum('retention', ['Yes', 'No'])->default('No');
            $table->enum('transpire', ['Yes', 'No'])->default('No');
            $table->enum('pride', ['Yes', 'No'])->default('No');
            $table->string('date', 30)->nullable();
            $table->string('time', 30)->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('cloud_payout_configure');
    }
};
