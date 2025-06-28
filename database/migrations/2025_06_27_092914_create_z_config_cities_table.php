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
    Schema::create('z_config_city', function (Blueprint $table) {
        $table->id('loc_id'); 

        $table->string('loc_name', 255)->nullable();
        $table->unsignedInteger('loc_zone_id')->nullable();
        $table->unsignedInteger('parent_state_id')->default(0);
        $table->unsignedInteger('parent_country_id')->default(0);
        $table->unsignedInteger('parent_id')->default(0);
        $table->string('country_code', 50)->nullable();
        $table->string('iso_code', 100)->nullable();
        $table->string('number_length', 255)->nullable();

        

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
        Schema::dropIfExists('z_config_cities');
    }
};
