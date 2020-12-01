<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            $table->bigInteger('id_secretaria')->unsigned();
            $table->foreign('id_secretaria')->references('id')->on('secretarias')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_setor')->unsigned();
            $table->foreign('id_setor')->references('id')->on('setores')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_secretaria_origem')->unsigned()->nullable();
            $table->foreign('id_secretaria_origem')->references('id')->on('secretarias')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_setor_origem')->unsigned()->nullable();
            $table->foreign('id_setor_origem')->references('id')->on('setores')->onDelete('cascade')->onUpdate('cascade');
            $table->date('data_remanejo')->nullable();
            $table->string('tipo_remanejo')->nullable();
            $table->string('motivo')->nullable();
            $table->date('data_inservivel')->nullable();
            $table->string('leilao')->nullable();
            $table->longText('mais_detalhes')->nullable();
            $table->string('patrimonio')->nullable();
            $table->string('status');
            $table->string('tipo_equipamento');
            $table->string('serie')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('tipo_computador')->nullable();
            $table->string('so')->nullable();
            $table->string('cpu')->nullable();
            $table->string('ram')->nullable();
            $table->string('discos')->nullable();
            $table->string('hd0')->nullable();
            $table->string('hd1')->nullable();
            $table->string('hd2')->nullable();
            $table->string('hd3')->nullable();
            $table->string('hd4')->nullable();
            $table->string('tipo_impressora')->nullable();
            $table->string('tipo_cartucho')->nullable();
            $table->string('cartuchos')->nullable();
            $table->string('preto')->nullable();
            $table->string('tricolor')->nullable();
            $table->string('amarelo')->nullable();
            $table->string('azul')->nullable();;
            $table->string('magenta')->nullable();
            $table->string('fotocondutor')->nullable();
            $table->string('modelo_fotocondutor')->nullable();
            $table->string('tipo_projetor')->nullable();
            $table->string('lampada')->nullable();
            $table->string('so_projetor')->nullable();
            $table->string('cpu_projetor')->nullable();
            $table->string('ram_projetor')->nullable();
            $table->string('hd0_projetor')->nullable();
            $table->string('tipo_roteador')->nullable();
            $table->string('porta')->nullable();
            $table->string('antenas')->nullable();
            $table->string('ssid')->nullable();
            $table->string('tipo_criptografia')->nullable();
            $table->string('senha_rede')->nullable();
            $table->string('usuario')->nullable();
            $table->string('senha')->nullable();
            $table->string('tipo_scanner')->nullable();
            $table->string('tipo_conexao')->nullable();
            $table->string('adaptador')->nullable();
            $table->string('versao_usb')->nullable();
            $table->string('ethernet')->nullable();
            $table->string('enderecamento')->nullable();
            $table->string('internet')->nullable();
            $table->string('ip')->nullable();
            $table->string('mascara')->nullable();
            $table->string('hostname')->nullable();
            $table->string('grupo')->nullable();
            $table->string('id_teamviewer')->nullable();
            $table->string('id_supremo')->nullable();
            $table->date('data_cadastro');
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
        Schema::dropIfExists('system');
    }
}
