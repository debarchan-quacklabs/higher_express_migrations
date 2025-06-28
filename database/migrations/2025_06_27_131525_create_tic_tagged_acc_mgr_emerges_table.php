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
    Schema::create('tic_tagged_acc_mgr_emerge', function (Blueprint $table) {
        $table->id('emerge_tag_id');
        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('dept_id')->nullable();
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('company_id')->nullable();
        $table->unsignedInteger('create_u_id')->nullable();
        $table->string('ip', 200)->nullable();
        $table->string('browser', 200)->nullable();
        $table->string('date', 225)->nullable();
        $table->string('time', 225)->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_tagged_acc_mgr_emerges');
    }
};
