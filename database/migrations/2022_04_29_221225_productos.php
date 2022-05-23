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
            $table->engine="InnoDB";
            $table->id('id')->lenght(11);
            $table->unsignedBigInteger('idcag');
            $table->unsignedBigInteger('idpro');
            $table->string('nombre')->lenght(50);
            $table->string('descripcion')->lenght(150);
            $table->double('val_unit')->lenght(40);
            $table->timestamps();
            $table->foreign('idcag')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('idpro')->references('id')->on('proovedores')->onDelete('cascade');
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
