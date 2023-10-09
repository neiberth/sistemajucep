<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursosHumanos extends Model
{
    use HasFactory;

    protected $fillable =[
        'matricula',
        'nome',
        'cpf',
        'rg',
        'telefone',
        'email',
        'endereco',
        'complemento',
        'data_inicio',
        'validade',
        'data_fim',
        'funcao',
        'setor',
        'contrato',
        'path',
        'cidades_id',
        'status',
    ];

    public function cidades()
    {
        return $this->belongsTo(Cidades::class);
    }
}
