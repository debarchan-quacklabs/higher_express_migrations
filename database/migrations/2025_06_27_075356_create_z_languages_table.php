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
    Schema::create('z_languages', function (Blueprint $table) {
        $table->id('language_id'); // int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY

        $table->string('language', 255)->nullable();
        $table->string('ISO_code', 255)->nullable();

       
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
        Schema::dropIfExists('z_languages');
    }
};
