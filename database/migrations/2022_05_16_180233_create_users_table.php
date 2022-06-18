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
        Schema::create('users', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id('id');
            $table->unsignedBigInteger('idrol')->default(1);
            $table->string('name');
            $table->string('apellido');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->date('fecha_nac');
            $table->string('tipo_doc')->nullable();
            $table->integer('num_doc')->nullable();
            $table->string('password');
            $table->string('ciudad')->nullable();
            $table->string('dire')->nullable();
            $table->integer('tel')->nullable();
            $table->rememberToken();
            $table->foreign('idrol')->references('id')->on('rols')->onDelete('cascade');
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
        Schema::dropIfExists('users');
    }
};
