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
    Schema::create('tic_scorecard_set', function (Blueprint $table) {
        $table->id('scorecard_set_id'); 
         $table->unsignedInteger('u_id')->nullable();
          $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('module_id')->nullable();
        $table->unsignedInteger('cloud_id')->nullable();
        $table->unsignedInteger('created_by')->nullable();
        $table->string('scorecard_name')->nullable();
        $table->enum('rating_type', ['5 Pointer Scale', '3 Pointer Scale', 'Numeric Scale']);
        $table->enum('allow_neutral', ['Yes', 'No'])->default('Yes');
        $table->enum('overall_comment_required', ['Yes', 'No'])->default('Yes');
        $table->date('date')->nullable();
        $table->string('time')->nullable();
        $table->string('ip')->nullable();
        $table->string('browser')->nullable();
        $table->timestamps(); // Adds created_at and updated_at
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_scorecard_sets');
    }
};
