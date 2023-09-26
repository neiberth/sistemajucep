<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsuarioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usuarios = User::all();

        //dd($usuarios);
        return view('sistema.usuario.index', compact('usuarios'));

    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('sistema.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if($request->input('_token') != ''){
            $validacaoCampo = [
                'name' => ['required', 'string', 'max:255'],
                'login' => ['required', 'string', 'max:100'],
                'admin' => ['boolean'],
                'arquivo' => ['boolean'],
                'rh' => ['boolean'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6', 'confirmed'],
            ];
            $request->validate($validacaoCampo);
        }
        User::create($request->all());
        return redirect()->route('usuario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $usuario)
    {
        return view('sistema.usuario.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $usuario)
    {
        return view('sistema.usuario.edit', compact('usuario'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $usuario)
    {
        // $validacaoCampo = [
        //     'num_caixa' => 'required',
        // ];
        // $msgError = [
        //     'required' => 'Esse Campo é Obrigatorio',
        //     'unique' => 'Caixa já foi cadastrada',
        //     'integer' => 'Campo só aceita Números',
        // ];

        // $request->validate($validacaoCampo, $msgError);

        $usuario = User::find($usuario->id);
        $usuario->update($request->all());

        return redirect()->route('usuario.index');
        //var_dump($request->except('_token', '_method'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
