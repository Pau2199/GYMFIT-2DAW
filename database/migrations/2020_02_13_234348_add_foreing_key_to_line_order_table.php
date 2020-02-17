<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeingKeyToLineOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('line_order', function (Blueprint $table) {
            $table->foreign('idPedido')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('idProducto')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('line_order', function (Blueprint $table) {
            $table->dropForeign('line_order_idPedido_foreign');
            $table->dropForeign('line_order_idProducto_foreign');
        });
    }
}
