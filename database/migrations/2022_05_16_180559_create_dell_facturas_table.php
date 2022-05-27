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
        Schema::create('dell_facturas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            $table->unsignedBigInteger('idfactu');
            $table->unsignedBigInteger('idproduct');
            $table->double('cant');
            $table->double('v_unit');
            $table->double('total');
            $table->double('iva');
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
        Schema::dropIfExists('dell_facturas');
    }
};
