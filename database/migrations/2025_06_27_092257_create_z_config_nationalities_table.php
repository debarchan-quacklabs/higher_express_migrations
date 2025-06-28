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
    Schema::create('z_config_nationality', function (Blueprint $table) {
        $table->id('nationality_id'); // int(11) AUTO_INCREMENT PRIMARY KEY

        $table->unsignedInteger('num_code')->default(0);
        $table->string('alpha_2_code', 255);
        $table->string('alpha_3_code', 255);
        $table->string('en_short_name', 255);
        $table->string('nationality', 255);

        

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
        Schema::dropIfExists('z_config_nationalities');
    }
};
