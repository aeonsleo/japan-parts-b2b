<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public $guarded = ['id'];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('part_number')->index();
            $table->string('type');
            $table->double('width')->nullable();
            $table->double('height')->nullable();
            $table->double('length')->nullable();
            $table->double('weight')->nullable();
            $table->text('description');
            $table->integer('min_order_quantity');
            $table->integer('max_order_quantity')->nullable();
            $table->integer('lead_time')->nullable();
            $table->integer('is_new');
            $table->integer('in_stock')->nullable();
            $table->integer('unit_price');
            $table->string('parts_group');
            $table->string('brand_name')->index();
            $table->string('category');
            $table->string('brand_part_name');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('country_id');
            $table->unsignedBigInteger('tax_id');
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('supplier_id')->references('id')->on('suppliers');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('tax_id')->references('id')->on('taxes');
            $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function(Blueprint $table) {
            $table->dropForeign('products_supplier_id_foreign');
            $table->dropForeign('products_country_id_foreign');
            $table->dropForeign('products_tax_id_foreign');
            $table->dropForeign('products_category_id_foreign');
        });

        Schema::dropIfExists('products');
    }
}
