<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerifericos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perifericos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->bigInteger('id_equipamento')->unsigned();
            $table->foreign('id_equipamento')->references('id')->on('equipamentos')->onUpdate('cascade');
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
            $table->string('tipo_periferico');
            $table->string('serie')->nullable();
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('padrao_tomadas_atr')->nullable();
            $table->string('va_atr')->nullable();
            $table->string('padrao_tomadas_est')->nullable();
            $table->string('va_est')->nullable();
            $table->string('volt_entrada_est')->nullable();
            $table->string('volt_saida_est')->nullable();
            $table->string('quantidade_tomadas_est')->nullable();
            $table->string('padrao_tomadas_nbr')->nullable();
            $table->string('va_nbr')->nullable();
            $table->string('volt_entrada_nbr')->nullable();
            $table->string('volt_saida_nbr')->nullable();
            $table->string('quantidade_tomadas_nbr')->nullable();
            $table->string('quantidade_baterias_nbr')->nullable();
            $table->string('padrao_tomadas_mdi')->nullable();;
            $table->string('va_mdi')->nullable();
            $table->string('volt_entrada_mdi')->nullable();
            $table->string('volt_saida_mdi')->nullable();
            $table->string('quantidade_tomadas_mdi')->nullable();
            $table->string('estabilizador_mdi')->nullable();
            $table->string('tipo_tela_mnt')->nullable();
            $table->string('tamanho_tela_mnt')->nullable();
            $table->string('conexoes_mnt')->nullable();
            $table->string('padrao_tomadas_mnt')->nullable();
            $table->string('resolucao_wbc')->nullable();
            $table->string('microfone_wbc')->nullable();
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
        Schema::dropIfExists('perifericos');
    }
}
