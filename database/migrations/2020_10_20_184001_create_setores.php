<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_secretaria')->unsigned();
            $table->foreign('id_secretaria')->references('id')->on('secretarias')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->string('gestor');
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
        Schema::dropIfExists('setores');
    }
}
