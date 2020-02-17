<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLineOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('line_order', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('quantity');
            $table->float('price');
            $table->bigInteger('idPedido')->unsigned();
            $table->bigInteger('idProducto')->unsigned();
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
        Schema::dropIfExists('line_order');
    }
}
