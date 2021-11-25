<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceSlabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_slabs', function (Blueprint $table) {
            $table->id();
            $table->integer('units_from');
            $table->integer('units_to');
            $table->decimal('price');
            $table->foreignId('product_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('price_slabs', function(Blueprint $table) {
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('price_slabs');
    }
}
