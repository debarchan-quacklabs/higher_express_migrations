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
        Schema::create('tic_company_billing_tariff_slab', function (Blueprint $table) {
            $table->id('invoice_slab_id');

            $table->unsignedInteger('u_id')->nullable();
            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('cloud_id')->nullable();
            $table->unsignedInteger('invoice_id')->default(0);
            $table->unsignedInteger('company_id')->default(0);

            $table->string('slab_row', 225)->default('NA');
            $table->string('slab_from', 225)->default('NA');
            $table->string('slab_till', 225)->default('NA');

            $table->string('part_a_amt_per', 225)->default('NA');
            $table->string('part_a_replacements', 225)->default('NA');
            $table->string('part_a_paymentterms', 225)->default('NA');

            $table->string('part_b_amt_per', 225)->default('NA');
            $table->string('part_b_replacements', 225)->default('NA');
            $table->string('part_b_paymentterms', 225)->default('NA');

            $table->string('part_c_amt_per', 225)->default('NA');
            $table->string('part_c_replacements', 225)->default('NA');
            $table->string('part_c_paymentterms', 225)->default('NA');

            $table->string('total_amt_per', 225)->default('NA');
            $table->string('total_replacement', 225)->default('NA');
            $table->string('cooling_off_days', 225)->default('NA');
            $table->string('totalpaymentterms', 225)->default('NA');

            // Audit fields
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
        Schema::dropIfExists('tic_company_billing_tariff_slabs');
    }
};
