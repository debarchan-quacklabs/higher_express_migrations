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
    Schema::create('z_jd_category', function (Blueprint $table) {
        $table->id('jd_category_id'); 

        $table->text('jd_category_name')->nullable();
        $table->unsignedInteger('jd_category_order')->nullable();
        $table->unsignedInteger('js_category_parent_id')->nullable();

      

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
        Schema::dropIfExists('z_jd_categories');
    }
};
