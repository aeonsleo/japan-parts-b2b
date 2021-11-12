<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryFieldOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_field_options', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('category_field_id');
            $table->foreign('category_field_id')->references('id')->on('category_fields');
            $table->unique(['name', 'category_field_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_field_options', function(Blueprint $table) {
            $table->dropForeign('category_field_options_category_field_id_foreign');
        });

        Schema::dropIfExists('category_field_options');
    }
}
