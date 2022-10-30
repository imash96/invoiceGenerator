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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('business_name')->nullable();
            $table->string('business_address_street1')->nullable();
            $table->string('business_address_street2')->nullable();
            $table->string('business_address_city')->nullable();
            $table->string('business_address_state')->nullable();
            $table->string('business_address_zipcode')->nullable();
            $table->string('business_email')->nullable();
            $table->string('business_phone_number')->nullable();
            $table->string('business_website')->nullable();
            $table->string('header_img')->nullable();
            $table->string('business_logo')->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
