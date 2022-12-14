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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('client_id');
            $table->string('invoice_id');
            $table->string('payment_amount');
            $table->string('payment_type');
            $table->string('payment_date')->nullable();
            $table->string('transaction_reference')->nullable();
            $table->longText('private_notes')->nullable();
            $table->string('status')->default('Incomplete');
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
        Schema::dropIfExists('payments');
    }
};
