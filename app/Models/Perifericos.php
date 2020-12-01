<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perifericos extends Model
{
    use HasFactory;
    protected $table='perifericos';
    protected $fillable=[
        'id_equipamento',
        'id_user',
        'id_secretaria',
        'id_setor',
        'id_secretaria_origem',
        'id_setor_origem',
        'data_remanejo',
        'tipo_remanejo',
        'motivo',
        'data_inservivel',
        'leilao',
        'mais_detalhes',
        'patrimonio',
        'status',
        'tipo_periferico',
        'serie',
        'marca',
        'modelo',
        'padrao_tomadas_atr',
        'va_atr',
        'padrao_tomadas_est',
        'va_est',
        'volt_entrada_est',
        'volt_saida_est',
        'quantidade_tomadas_est',
        'padrao_tomadas_nbr',
        'va_nbr',
        'volt_entrada_nbr',
        'volt_saida_nbr',
        'quantidade_tomadas_nbr',
        'quantidade_baterias_nbr',
        'padrao_tomadas_mdi',
        'va_mdi',
        'volt_entrada_mdi',
        'volt_saida_mdi',
        'quantidade_tomadas_mdi',
        'estabilizador_mdi',
        'tipo_tela_mnt',
        'tamanho_tela_mnt',
        'conexoes_mnt',
        'padrao_tomadas_mnt',
        'resolucao_wbc',
        'microfone_wbc',
        'data_cadastro'
    ];

    public function secretaria()
    {
        return $this->hasOne('App\Models\Secretarias', 'id', 'id_secretaria');
    }

    public function setor()
    {
        return $this->hasOne('App\Models\Setores', 'id', 'id_setor');
    }

}
