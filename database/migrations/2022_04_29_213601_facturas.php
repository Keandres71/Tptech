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
            $table->id('id')->lenght(11);
            $table->unsignedBigInteger('iduser');
            $table->double('iva')->lenght(50);
            $table->double('neto')->lenght(50);
            $table->double('total')->lenght(35);
            $table->foreign('iduser')->references('id')->on('usuarios')->onDelete('cascade');
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
