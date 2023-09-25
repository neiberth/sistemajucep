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
        'cidade',
        'data_inicio',
        'validade',
        'data_fim',
        'funcao',
        'setor',
        'contrato',
        'path',
    ];
}
