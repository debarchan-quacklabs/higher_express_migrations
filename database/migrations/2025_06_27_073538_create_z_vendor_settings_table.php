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
    Schema::create('z_vendor_settings', function (Blueprint $table) {
        $table->id('vendor_id'); 

        $table->unsignedInteger('u_id')->nullable();
        $table->string('create_dt', 225)->nullable();
        $table->unsignedInteger('creater_id')->nullable();
        $table->string('create_source', 225)->nullable();

        $table->string('vendor_name', 225)->nullable();
        $table->string('vendor_contact_name', 225)->nullable();
        $table->string('vendormailid', 225)->nullable();
        $table->string('vendor_mob_no', 225)->nullable();
        $table->string('vendor_alt_no', 225)->nullable();
        $table->string('vendor_website', 225)->nullable();
        $table->string('vendor_city', 225)->nullable();
        $table->string('vendor_state', 225)->nullable();
        $table->string('vendor_address', 225)->nullable();
        $table->string('pannum', 225)->nullable();
        $table->string('vendor_gstin', 225)->nullable();

        $table->unsignedInteger('category_id')->nullable();
        $table->unsignedInteger('sub_user_limit')->default(0);

        $table->enum('vendor_status', ['Active', 'Inactive'])->default('Active');

       
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
        Schema::dropIfExists('z_vendor_settings');
    }
};
