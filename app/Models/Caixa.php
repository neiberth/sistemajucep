<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Caixa extends Model
{
    use HasFactory;

    protected $fillable =[
        'responsavel',
        'caixa',
        'status',
        'obs',
    ];

    public function processo()
    {
        return $this->hasMany(Processo::class);
    }

}
