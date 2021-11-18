<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_line_1');
            $table->string('address_line_2');
            $table->string('address_line_3')->nullable();
            $table->string('phone');
            $table->string('city');
            $table->string('zip');
            $table->string('landmark')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('addresses', function(Blueprint $table) {
            $table->dropForeign('addresses_country_id_foreign');
            $table->dropForeign('addresses_user_id_foreign');
        });

        Schema::dropIfExists('addresses');
    }
}
