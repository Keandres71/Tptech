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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('id')->lenght(11);
            $table->unsignedBigInteger('idrol');
            $table->string('nombre')->lenght(50);
            $table->string('apellido')->lenght(50);
            $table->string('dire')->lenght(80);
            $table->integer('tel')->length(20);
            $table->string('email')->lenght(50);
            $table->foreign('idrol')->references('id')->on('roles')->onDelete('cascade');
            $table->rememberToken();
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
        Schema::dropIfExists('usuarios');
    }
};
