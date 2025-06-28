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
    Schema::create('z_functional_areas', function (Blueprint $table) {
        $table->id('funarea_id'); // bigint(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY

        $table->unsignedInteger('cloud_id')->default(0);
        $table->string('funarea_name', 191);
        $table->string('funarea_parent_id', 191);
        $table->enum('is_visible', ['Yes', 'No'])->default('Yes');
        $table->unsignedInteger('is_hidden')->nullable();
        $table->string('source', 255)->nullable();

       

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
        Schema::dropIfExists('z_functional_areas');
    }
};
