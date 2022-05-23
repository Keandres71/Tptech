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
            $table->id('id')->lenght(11);
            $table->unsignedBigInteger('idfactu');
            $table->unsignedBigInteger('idproduct');
            $table->double('cant')->lenght(50);
            $table->double('v_unit')->lenght(50);
            $table->double('iva')->lenght(50);
            $table->double('total')->lenght(35);
            $table->timestamps();
            $table->foreign('idfactu')->references('id')->on('facturas')->onDelete('cascade');

            $table->foreign('idproduct')->references('id')->on('productos')->onDelete('cascade');
            
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
