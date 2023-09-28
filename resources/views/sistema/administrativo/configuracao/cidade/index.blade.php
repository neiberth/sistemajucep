@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Administrativo</a></li>
                <li class="breadcrumb-item"><a href="{{ route('sistema.home') }}">Configuração</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cidade</li>
            </ol>
        </nav>
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>
        <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Novo Município</h5>
                        <p class="card-text">Cadastre um novo município.</p>
                        <a href="{{ route('cidade.create') }}" class="btn btn-primary"><i class="fa-solid fa-user-plus me-1"></i>Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <form action="{{ route('cidade.index') }}" method="GET">
                        <div class="card-body">
                            <h5 class="card-title">Busca por Município</h5>
                            <div class="row">
                                <p class="card-text col-md-2 col-form-label text-md-start">Município</p>
                                <div class="col-md-5">
                                    <input id="municipio" type="text"class="form-control " name="municipio">
                                </div>
                            </div>
                            <button class="btn btn-primary mt-1"> <i class="fa-solid fa-magnifying-glass me-1"></i>Localizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>
        <h2>Lista dos Municípios</h2>


        <div class="table-responsive small mb-0">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Município</th>
                        <th scope="col">Atualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($cidades as $cidade)
                        <tr>
                            <td>{{ $cidade->id }}</td>
                            <td>{{ $cidade->municipio }}</td>
                            <td><a href="{{ route('cidade.edit', $cidade->id) }}"> <i
                                        class="fa-solid fa-city fs-5 text-danger"></i></a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="fs-5 fw-medium text-danger mb-0">Nenhum Município foi Localizado</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </main>
@endsection
