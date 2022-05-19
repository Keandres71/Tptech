<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('id_factura')->lenght(11);
            $table->double('iva_factura')->lenght(50);
            $table->double('neto_factura')->lenght(50);
            $table->double('total_factura')->lenght(35);
            $table->string('estado_factura')->lenght(50);
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
        Schema::dropIfExists('facturas');
    }
};
