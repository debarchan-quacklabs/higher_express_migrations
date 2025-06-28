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
    Schema::create('z_jd_content', function (Blueprint $table) {
        $table->id('sbc_id'); 

        $table->string('sbc_name', 255)->nullable();
        $table->unsignedInteger('parent_category_id')->nullable();
        $table->string('parent_category_name', 255)->nullable();
        $table->string('content_type', 255)->nullable();
        $table->text('content_list')->nullable();

       
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
        Schema::dropIfExists('z_jd_contents');
    }
};
