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
    Schema::create('tic_user_details', function (Blueprint $table) {
        $table->id('details_id');

        $table->unsignedInteger('u_id')->nullable();
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->string('joining_date')->nullable();
        $table->string('city')->nullable();

        $table->unsignedInteger('country')->nullable();
        $table->string('country_name')->nullable();

        $table->unsignedInteger('state')->nullable();
        $table->string('state_name')->nullable();

        $table->string('zipcode', 30)->nullable();
        $table->text('skills')->nullable();
        $table->longText('about')->nullable();

        $table->string('website', 30)->nullable();
        $table->string('cover_image')->nullable();

        $table->string('date', 30)->nullable();
        $table->string('time', 30)->nullable();
        $table->string('ip', 30)->nullable();
        $table->string('browser', 30)->nullable();

        $table->timestamps(); // created_at and updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_user_details');
    }
};
