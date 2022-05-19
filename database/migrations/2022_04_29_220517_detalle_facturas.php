<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_facturas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('id_detfactura')->lenght(11);
            $table->unsignedBigInteger('id_factura');
            $table->double('cantidad')->lenght(50);
            $table->double('valor_unitario')->lenght(50);
            $table->double('total')->lenght(35);
            $table->timestamps();

            $table->foreign('id_factura')->on('facturas')->references('id_factura');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_facturas');
    }
};
