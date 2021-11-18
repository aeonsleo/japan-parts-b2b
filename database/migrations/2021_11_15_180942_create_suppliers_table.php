<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuppliersTable extends Migration
{
    public $guarded = ['id', 'user_id'];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('business_id')->nullable();
            $table->string('phone');
            $table->string('business_email')->nullable();
            $table->string('contact_person_name');
            $table->string('url')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

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
        Schema::table('suppliers', function(Blueprint $table) {
            $table->dropForeign('suppliers_user_id_foreign');
        });

        Schema::dropIfExists('suppliers');
    }
}
