<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArquivoController extends Controller
{
    public function index(){
        return view('sistema.arquivo.index');
    }
}
