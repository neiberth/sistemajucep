<?php

namespace App\Http\Controllers;

use App\Models\RecursosHumanos;
use App\Models\Cidades;
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
        $cidades = Cidades::all();
        return view('sistema.rh.create', compact('cidades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->input('_token') !=''){
            $validacaoCampo =[
                'matricula' => 'required|integer',
                'nome' => 'required|string|max:50',
                'cpf' => 'required|string|max:14',
                'rg' => 'required|string|max:25',
                'telefone' => 'required|string|max:15',
                'email' =>'required|email|max:255',
                'endereco' => 'required|max:500',
                'complemento' => 'max:255',
                'cidade' => 'max:255',
                'data_inicio' => 'max:255',
                'validade' => 'max:255',
                'data_fim' => 'max:255',
                'funcao' => 'max:255',
                'setor' => 'max:255',
                'contrato' => 'max:255',
                'path' => 'max:255',
                'cidades_id' => 'required|integer',
            ];
            $msgErros = [
                'required' => 'Campo obrigatorio',
                'integer' => 'Campo só com números',
                'email' => 'Email não é valido',
                'cidades_id.intever' => 'Campo Obrigatorio',
            ];

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
