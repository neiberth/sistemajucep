<?php

namespace App\Http\Controllers;

use App\Models\Cidades;
use Illuminate\Http\Request;

class CidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('sistema.administrativo.configuracao.cidade.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
