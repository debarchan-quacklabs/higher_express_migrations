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
    Schema::create('z_config_phd', function (Blueprint $table) {
        $table->id('phd_id'); 

        $table->unsignedInteger('cloud_id');
        $table->string('phd_name', 255)->nullable();
        $table->unsignedInteger('phd_parent_id')->default(0);

       

        $table->string('date', 191)->nullable();
        $table->string('time', 191)->nullable();
        $table->string('ip', 191)->nullable();
        $table->string('browser', 191)->nullable();

        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_config_phds');
    }
};
