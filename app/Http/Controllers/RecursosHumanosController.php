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
        //dd($request);
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
