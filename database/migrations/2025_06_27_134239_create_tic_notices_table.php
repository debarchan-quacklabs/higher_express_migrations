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
    Schema::create('tic_notices', function (Blueprint $table) {
        $table->id('notice_id'); // Primary Key
$table->unsignedInteger('u_id')->nullable();
         $table->unsignedInteger('role_id')->nullable();
        $table->unsignedInteger('cloud_id')->nullable();
                $table->unsignedInteger('module_id')->nullable();

        $table->string('dept_ids')->nullable();
        $table->text('user_ids')->nullable();
        $table->string('notice_name')->nullable();
        $table->string('screenshot')->nullable();
        $table->longText('notice_description')->nullable();
        $table->unsignedInteger('created_by')->nullable();
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
        Schema::dropIfExists('tic_notices');
    }
};
