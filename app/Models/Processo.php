<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Processo extends Model
{
    use HasFactory;

    protected $fillable = [
        'protocolo',
        'responsavel',
        'posicao',
        'path',
        'corrigir_pdf',
        'caixa_id',
    ];

    public function caixa()
    {
        return $this->belongsTo(Caixa::class);
    }
}
