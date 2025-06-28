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
        Schema::create('tic_company_billing_tariff', function (Blueprint $table) {
            $table->id('invoice_id'); // Primary key

            $table->unsignedInteger('role_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->string('cloud_id', 225);
            $table->unsignedInteger('u_id')->default(0);
            $table->unsignedInteger('company_id')->default(0);

            $table->string('payout_for', 50)->default('Company');
            $table->string('level_type', 225)->default('NA');
            $table->string('project_name', 225)->default('NA');
            $table->string('billing_type', 225)->default('NA');
            $table->string('invoice_rate', 225)->nullable();
            $table->string('invoice_type', 225)->default('NA');

            $table->string('slab_from', 225)->default('NA');
            $table->string('slab_till', 225)->default('NA');
            $table->string('payout_settlement', 255)->default('30');

            $table->string('part_a_amt_per', 225)->default('NA');
            $table->string('part_a_replacements', 225)->default('NA');
            $table->string('part_a_paymentterms', 225)->default('NA');

            $table->string('part_b_amt_per', 225)->default('NA');
            $table->string('part_b_replacements', 225)->default('NA');
            $table->string('part_b_paymentterms', 225)->default('NA');

            $table->string('part_c_amt_per', 225)->default('NA');
            $table->string('part_c_replacements', 225)->default('NA');
            $table->string('part_c_paymentterms', 225)->default('NA');

            $table->string('total_amt_percent', 225)->default('NA');
            $table->string('total_replacement', 225)->default('NA');
            $table->string('cooling_off_days', 225)->default('NA');
            $table->string('totalpaymentterms', 225)->default('NA');

            // Audit fields
            $table->string('date', 225);
            $table->string('time', 225);
            $table->string('ip', 225);
            $table->string('browser', 225);

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tic_company_billing_tariffs');
    }
};
