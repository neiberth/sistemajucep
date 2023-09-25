<?php

namespace App\Http\Controllers;

use App\Models\RecursosHumanos;
use Illuminate\Http\Request;

class RecursosHumanosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sistema.rh.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sistema.rh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->input('_token') != ''){
            $validacaoCampo =[
                'matricula' => ['required', 'string', 'max:20'],
                'nome' => ['required', 'string', 'max:255'],
                'cpf' => ['required', 'string', 'max:25'],
                'rg' => ['required', 'string', 'max:25'],
                'telefone' => ['required', 'string', 'max:20'],
                'email' => ['string', 'email', 'max:255', 'unique:users'],
                'endereco' => ['required', 'string', 'max:255'],
                'complemento'=> ['required', 'string', 'max:255'],
                'cidade'=> ['required', 'string', 'max:50'],
                'data_inicio'=> ['required'],
                'validade'=> ['string', 'max:50'],
                'data_fim' => [],
                'funcao'=> ['string', 'max:50'],
                'setor'=> ['string', 'max:50'],
                'contrato'=> ['required', 'string', 'max:50'],
                'path'=> ['string', 'max:300'],
            ];
            $request->validate($validacaoCampo);
        }
        RecursosHumanos::create($request->all());
        return redirect()->route('rh.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RecursosHumanos $recursosHumanos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecursosHumanos $recursosHumanos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecursosHumanos $recursosHumanos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecursosHumanos $recursosHumanos)
    {
        //
    }
}
