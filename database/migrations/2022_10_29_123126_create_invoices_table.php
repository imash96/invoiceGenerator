<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_number')->unique();
            $table->string('invoice_date');
            $table->string('pos_id')->nullable();
            $table->string('challan_number')->nullable();
            $table->string('lr_number')->nullable();
            $table->string('ewaybill_number')->nullable();
            $table->string('pace_of_supply')->nullable();
            $table->string('client_id');
            $table->text('products')->nullable();
            $table->string('gst_type')->default('sgst');
            $table->integer('freight_charges')->default(0);
            $table->integer('insurance_charges')->default(0);
            $table->integer('packnforward_charges')->default(0);
            $table->integer('amount')->nullable();
            $table->integer('balance')->default('0');
            $table->string('due_date')->nullable();
            $table->integer('deposit_amount')->nullable();
            $table->string('status')->default('Draft');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoices');
    }
};
