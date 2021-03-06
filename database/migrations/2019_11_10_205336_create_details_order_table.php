<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailsOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('details_order')) {
            Schema::create('details_order', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('details_order_product_id_foreign');
                $table->unsignedBigInteger('details_order_oders_id_foreign');
                $table->integer('quantity');
                $table->float('price');
                $table->foreign('details_order_product_id_foreign')->references('id')->on('products');
                 $table->foreign('details_order_oders_id_foreign')->references('id')->on('orders');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('details_order');
    }
}
