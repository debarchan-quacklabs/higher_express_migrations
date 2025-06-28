<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tic_career_basic', function (Blueprint $table) {
            $table->id('id'); // Automatically primary and unsigned big integer

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();

            $table->tinyInteger('cloud_id')->nullable();
            $table->string('primary_language')->nullable();
            $table->string('favicon')->nullable();
            $table->string('logo')->nullable();
            $table->string('career_url')->nullable();
            $table->string('career_site_name')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_subtitle')->nullable();
            $table->string('page_title')->nullable();
            $table->longText('career_site_description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_image_2')->nullable();
            $table->string('about_us_banner')->nullable();
            $table->string('about_us_title')->nullable();
            $table->string('about_us_sub_title')->nullable();
            $table->longText('about_description')->nullable();
            $table->string('about_us_cont_img')->nullable();
            $table->string('social_sharing_image')->nullable();
            $table->string('theme')->nullable();
            $table->string('page_layout')->nullable();
            $table->tinyInteger('enable_search_form')->nullable();
            $table->integer('paginator_limit')->nullable();

            $table->date('date')->nullable();
            $table->time('time')->nullable();
            $table->string('ip', 30)->nullable();
            $table->string('browser', 30)->nullable();

            $table->timestamp('deleted_at')->nullable(); // Soft delete

            $table->timestamps(); // created_at, updated_at
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_career_basics');
    }
};
