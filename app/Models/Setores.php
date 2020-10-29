<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Setores extends Model
{
    use HasFactory;
    protected $table='setores';
    protected $fillable=[
        'nome',
        'gestor',
        'id_secretaria'
    ];

    public function secretaria()
    {
        return $this->hasOne('App\Models\Secretarias', 'id', 'id_secretaria');
    }
}
