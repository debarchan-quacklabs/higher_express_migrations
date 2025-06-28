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
    Schema::create('z_integrations', function (Blueprint $table) {
        $table->id('intg_id'); // int(11) AUTO_INCREMENT PRIMARY KEY

        $table->string('intg_name', 255);
        $table->text('intg_config');
        $table->string('intg_type', 255);
        $table->text('intg_desc');
        $table->string('intg_shortdesc', 500);
        $table->unsignedInteger('intg_status')->default(1);
        $table->string('intg_logo', 255);

        
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
        Schema::dropIfExists('z_integrations');
    }
};
