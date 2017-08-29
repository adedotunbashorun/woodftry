<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionProcess1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productionproccess1', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_key')->unique();
            $table->string('product_design_name');
            $table->string('product_carpenter_name');
            $table->integer('product_status');
            $table->integer('product_quantity');
            $table->string('product_ordered_by');
            $table->string('product_description');
            $table->string('product_remarks');
            $table->integer('product_client_name');
            $table->string('end_date');
            $table->rememberToken();
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
        //
    }
}
