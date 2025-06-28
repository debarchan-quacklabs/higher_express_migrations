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
    Schema::create('z_x_xii_education', function (Blueprint $table) {
        $table->id('edu_id'); 
        $table->string('edu_name', 191);
        $table->string('state_name', 191);
        $table->string('edu_parent_id', 191);

        
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
        Schema::dropIfExists('z_x_xii_education');
    }
};
