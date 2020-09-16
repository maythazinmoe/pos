<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stocks', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->unsignedBigInteger('supplier_id');
            $table->unsignedBigInteger('product_id');
            $table->integer('quantity');
            $table->integer('buy_price');
            $table->string('status');
            $table->timestamps();

              $table->foreign('supplier_id')
                    ->references('id')
                    ->on('suppliers')
                    ->onDelete('cascade');

                      $table->foreign('product_id')
                    ->references('id')
                    ->on('products')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stocks');
    }
}
