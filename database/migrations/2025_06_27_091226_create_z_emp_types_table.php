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
    Schema::create('z_emp_type', function (Blueprint $table) {
        $table->id('emp_type_id'); 

        $table->unsignedInteger('cloud_id')->nullable();
        $table->text('emp_type')->nullable();
        $table->enum('is_visible', ['Yes', 'No'])->default('Yes');
        $table->string('is_hidden', 255);
        $table->string('source', 255)->nullable();

        $table->string('date', 255)->nullable();
        $table->string('time', 255)->nullable();
        $table->string('ip', 255)->nullable();
        $table->string('browser', 255)->nullable();

       

        $table->timestamps(); 
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_emp_types');
    }
};
