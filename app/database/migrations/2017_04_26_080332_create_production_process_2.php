<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionProcess2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productionproccess2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_key')->unique();
            $table->string('product_design_name');
            $table->string('product_finisher_name');
            $table->integer('product_finisher_dept');
            $table->integer('product_total_quantity');
            $table->string('product_quantity_out');
            $table->string('product_dispatched_date');
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
