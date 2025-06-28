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
    Schema::create('z_tmp_city', function (Blueprint $table) {
        $table->id('tmp_city_id'); // int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY

        $table->string('tmp_name', 255)->nullable();
        $table->unsignedInteger('tmp_state_id')->nullable();
        $table->unsignedInteger('tmp_parent_country_id')->nullable();
        $table->unsignedInteger('tmp_country_code')->nullable();
        $table->text('tmp_country_image')->nullable();
        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('user_id')->nullable();

        $table->enum('status', ['Approved', 'Pending', 'Rejected'])->default('Pending');
       
 
        $table->string('date', 255)->nullable();
        $table->string('time', 255)->nullable();
        $table->string('ip', 255)->nullable();
        $table->string('browser', 255)->nullable();

        $table->timestamps(); // created_at & updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('z_tmp_cities');
    }
};
