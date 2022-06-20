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
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            $table->unsignedBigInteger('idcag');
            $table->unsignedBigInteger('idpro');
            $table->string('nombre');
            $table->string('descripcion');
            $table->double('val_unit');
            $table->integer('stock');
            $table->char('active')->default(0);
            $table->timestamps();
            $table->foreign('idcag')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('idpro')->references('id')->on('proveedors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
