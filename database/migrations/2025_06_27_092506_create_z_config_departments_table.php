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
    Schema::create('z_config_department', function (Blueprint $table) {
        $table->id('dept_id'); 

        $table->string('dept_key', 225);
        $table->string('dept_type', 50)->nullable();
        $table->string('dept_name', 225);
        $table->string('module_name', 225);

       
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
        Schema::dropIfExists('z_config_departments');
    }
};
