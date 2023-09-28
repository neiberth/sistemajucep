<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $cidades = Cidades::orderBy('municipio', 'ASC');
        
        if($request->municipio){
            $cidades->where('municipio', 'like', "%$request->municipio%");
        }
        $cidades = $cidades->paginate(10);

        return view('sistema.administrativo.configuracao.cidade.index', compact('cidades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sistema.administrativo.configuracao.cidade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->input('_token') != ''){
            $validacaoCampo =[
                'municipio' => 'required|max:50',
            ];
            $msgError = [
                'required' => 'Campo Obrigatorio',
                'max' => 'Campo com maximo 50 caracteres',
            ];
            $request->validate($validacaoCampo, $msgError);
        }
        Cidades::create($request->all());
        return redirect()->route('cidade.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cidades $cidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cidades $cidades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cidades $cidades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cidades $cidades)
    {
        //
    }
}
