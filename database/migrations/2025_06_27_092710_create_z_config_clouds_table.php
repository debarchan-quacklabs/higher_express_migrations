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
    Schema::create('z_config_cloud', function (Blueprint $table) {
        $table->id('config_cloud_id'); // int(11) AUTO_INCREMENT PRIMARY KEY

        $table->unsignedInteger('cloud_id')->nullable();
        $table->enum('desire_pipeline', ['All', 'Individual'])->default('Individual');

        

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
        Schema::dropIfExists('z_config_clouds');
    }
};
