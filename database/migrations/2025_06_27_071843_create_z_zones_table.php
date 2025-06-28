<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('z_zone', function (Blueprint $table) {
            $table->id('zone_id');
            $table->string('zone_name', 225)->nullable();

          

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
        Schema::dropIfExists('z_zones');
    }
};
