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
    Schema::create('tic_global_recent_visited', function (Blueprint $table) {
        $table->id('visited_id');
        $table->unsignedInteger('u_id')->nullable();
        $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();

        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('visited_by')->nullable();
        $table->text('search_query')->nullable();
        $table->string('search_tab')->nullable();
        $table->string('exact_keywords')->nullable();
        $table->longText('url')->nullable();
        $table->string('date', 30)->nullable();
        $table->string('time', 30)->nullable();
        $table->string('ip', 30)->nullable();
        $table->string('browser', 30)->nullable();

        $table->timestamps(); 
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_global_recent_visiteds');
    }
};
