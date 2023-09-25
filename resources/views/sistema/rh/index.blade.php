@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuário</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Novo Colaborador</h5>
                        <p class="card-text">Cadastro de um novo Funcionario do sistema.</p>
                        <a href="{{ route('rh.create') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Busca por Nome no sistema</h5>

                        <div class="row">
                            <p class="card-text col-md-2 col-form-label text-md-start">Nome:</p>
                            <div class="col-md-5">
                                <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name" required
                                    autocomplete="name">
                            </div>
                        </div>
                        <a href="#" class="btn btn-primary">Busca</a>
                    </div>
                </div>
            </div>
        </div>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>
        <h2>Lista de Colaboradoers no Sistema</h2>


        <div class="table-responsive small mb-0">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Matricula</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Abrir Fixa</th>
                        <th scope="col">Atualizar</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @forelse ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->login }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td><a href="#"> <i class="bi bi-folder2-open fs-5 text-success"></i></a></td>
                    <td><a href="#"> <i class="bi bi-person-fill-gear fs-5 text-danger"></i></a></td>
                </tr>
                @empty
                <tr>
                  <td colspan="5"><p class="fs-5 fw-medium text-danger mb-0">Nenhum Usuario foi Localizada</p></td>
                </tr>
                @endforelse --}}
                </tbody>
            </table>
        </div>

    </main>
@endsection
