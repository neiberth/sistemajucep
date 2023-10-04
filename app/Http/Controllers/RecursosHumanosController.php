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
    public function index(Request $request)
    {
        $listaRHs = RecursosHumanos::orderBy('nome', 'ASC');
        $cont = RecursosHumanos::all();

        if ($request->contrato) {
            $listaRHs->where('contrato', 'like', "%$request->contrato%");
        }

        if ($request->nome) {
            $listaRHs->where('nome', 'like', "%$request->nome%");
        }
        //ultiliza a Paginação em 10 em 10
        $listaRHs = $listaRHs->paginate(10);

        //faz a Contagem de todos os Funcionarios
        $contColaboradores = $cont->count();

        //faz a Contagem de todos os Efetivos
        $contEfetivo = $cont->where('contrato', 'like', "efetivo");
        $contEfetivo = $contEfetivo->count();
        //faz a Contagem de todos os Comissionados
        $contComissionado = $cont->where('contrato', 'like', "comissionado");
        $contComissionado = $contComissionado->count();
        //faz a Contagem de todos os Prestadores
        $contPrestador = $cont->where('contrato', 'like', "prestador");
        $contPrestador = $contPrestador->count();



        return view('sistema.rh.index', compact('listaRHs', 'contColaboradores', 'contEfetivo', 'contComissionado', 'contPrestador'));
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
        if ($request->input('_token') != '') {
            $validacaoCampo = [
                'matricula' => 'required|integer',
                'nome' => 'required|string|max:50',
                'cpf' => 'required|string|max:14',
                'rg' => 'required|string|max:25',
                'telefone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'endereco' => 'required|max:500',
                'complemento' => 'max:255',
                'data_inicio' => 'max:255',
                'validade' => 'max:255',
                'data_fim' => 'max:255',
                'funcao' => 'required|max:255',
                'setor' => 'required|max:255',
                'contrato' => 'max:255',
                'path' => 'max:255',
                'cidades_id' => 'required|integer',
            ];
            $msgErros = [
                'required' => 'Campo Obrigatório',
                'integer' => 'Campo só com números',
                'email' => 'Email não é valido',
                'cidades_id.intever' => 'Campo Obrigatório',
            ];
            $request->validate($validacaoCampo, $msgErros);
        }
        RecursosHumanos::create($request->all());
        return redirect()->route('rh.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RecursosHumanos $rh)
    {
        return view('sistema.rh.show', compact('rh'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RecursosHumanos $rh)
    {
        $cidades = Cidades::all();
        return view('sistema.rh.edit', compact('rh', 'cidades'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RecursosHumanos $rh)
    {

        if($request->input('_token') != ''){
            $validacaoCampo = [
                'matricula' => 'required|integer',
                'nome' => 'required|string|max:50',
                'cpf' => 'required|string|max:14',
                'rg' => 'required|string|max:25',
                'telefone' => 'required|string|max:15',
                'email' => 'required|email|max:255',
                'endereco' => 'required|max:500',
                'complemento' => 'max:255',
                'data_inicio' => 'max:255',
                'validade' => 'max:255',
                'data_fim' => 'max:255',
                'funcao' => 'required|max:255',
                'setor' => 'required|max:255',
                'contrato' => 'max:255',
                'path' => 'max:255',
                'cidades_id' => 'required|integer',
            ];
            $msgErros = [
                'required' => 'Campo Obrigatório',
                'integer' => 'Campo só com números',
                'email' => 'Email não é valido',
                'cidades_id.intever' => 'Campo Obrigatório',
            ];

            $request->validate($validacaoCampo, $msgErros);
        }

        $rh = RecursosHumanos::find($rh->id);
        $rh->update($request->all());

        return redirect()->route('rh.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RecursosHumanos $recursosHumanos)
    {
        //
    }
}
