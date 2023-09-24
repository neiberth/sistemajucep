<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SistemaPermissaoController extends Controller
{
    public function negado(){
        return view('sistema.permission.acess_denied');
    }
}
