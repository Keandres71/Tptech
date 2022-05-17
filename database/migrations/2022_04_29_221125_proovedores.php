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
        Schema::create('proovedores', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('id_proovedor',11);
            $table->string('rsoc_proovedor',150);
            $table->string('direccion_proovedor')->lenght(50);
            $table->integer('telefono_proovedor')->length(10);
            $table->string('email_proovedor',35)->unique();        
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
        Schema::dropIfExists('proovedores');
    }
};
