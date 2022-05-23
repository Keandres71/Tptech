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
            $table->id('id')->lenght(11);
            $table->string('rsoc')->lenght(150);
            $table->string('dire')->lenght(50);
            $table->integer('tel')->length(10);
            $table->string('email')->lenght(35)->unique();        
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
