<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfiguracaoController extends Controller
{
    public function index(){
        return view('sistema.administrativo.configuracao.index');
    }
}
