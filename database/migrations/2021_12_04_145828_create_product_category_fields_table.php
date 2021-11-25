<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductCategoryFieldsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_category_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_field_id');
            $table->foreignId('category_field_option_id');
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
        Schema::table('product_category_fields', function(Blueprint $table) {
            $table->dropForeign(['category_field_id']);
            $table->dropForeign(['category_field_option_id']);
            $table->dropForeign(['product_id']);
        });

        Schema::dropIfExists('product_category_fields');
    }
}
