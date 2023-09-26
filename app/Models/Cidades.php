<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    use HasFactory;

    protected $fillable =[
        'municipio',
    ];

    public function recursosHumanos()
    {
        return $this->hasMany(RecursosHumanos::class);
    }
}
