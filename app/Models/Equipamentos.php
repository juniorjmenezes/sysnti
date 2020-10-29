<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipamentos extends Model
{
    use HasFactory;
    protected $table='equipamentos';
    protected $fillable=[
        'id_user',
        'id_secretaria',
        'id_setor',
        'id_secretaria_origem',
        'id_setor_origem',
        'data_remanejo',
        'tipo_remanejo',
        'patrimonio',
        'status',
        'tipo_equipamento',
        'serie',
        'marca',
        'modelo',
        'tipo_computador',
        'so',
        'cpu',
        'ram',
        'discos',
        'hd0',
        'hd1',
        'hd2',
        'tipo_impressora',
        'tipo_cartucho',
        'cartuchos',
        'cartucho_preto',
        'cartucho_amarelo',
        'cartucho_azul',
        'cartucho_magenta',
        'tipo_projetor',
        'lampada',
        'so_projetor',
        'cpu_projetor',
        'ram_projetor',
        'hd0_projetor',
        'tipo_roteador',
        'porta',
        'antenas',
        'ssid',
        'tipo_criptografia',
        'senha_rede',
        'usuario',
        'senha',
        'tipo_scanner',
        'tipo_conexao',
        'adaptador',
        'versao_usb',
        'ethernet',
        'enderecamento',
        'internet',
        'hostname',
        'grupo',
        'id_teamviewer',
        'id_supremo',
        'data_cadastro'
    ];

    public function secretaria()
    {
        return $this->hasOne('App\Models\Secretarias', 'id', 'id_secretaria');
    }

    public function setor()
    {
        return $this->hasOne('App\Models\Secretarias', 'id', 'id_setor');
    }
}
