@extends('sistema.layouts.template_home')

@section('content')
    <main class="col-md-9 ms-md-auto col-lg-10 px-md-3 mt-3 mb-0">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Funcionário</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>


        <div class="row row-cols-1 row-cols-md-4 mb-0 text-center">
            <div class="col">
                <div class="card mb-2 rounded-3 shadow-sm text-bg-primary">
                    <div class="card-header py-2">
                        <h5 class="my-0 fw-normal">Total de Funcionários</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title pricing-card-title"><i class="fa-solid fa-users me-2"></i><small
                                class="text-body-primary fw-light">{{ $contColaboradores }}</small></h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-2 rounded-3 shadow-sm">
                    <div class="card-header py-2">
                        <h5 class="my-0 fw-normal">Efetivo</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title pricing-card-title"><i class="fa-solid fa-users me-2"></i><small
                                class="text-body-secondary fw-light">{{ $contEfetivo }}</small></h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-2 rounded-3 shadow-sm ">
                    <div class="card-header py-2">
                        <h5 class="my-0 fw-normal">Comissionado</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title pricing-card-title"><i class="fa-solid fa-users me-2"></i>
                            <small class="text-body-secondary fw-light">{{ $contComissionado }}</small>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-2 rounded-3 shadow-sm">
                    <div class="card-header py-2">
                        <h5 class="my-0 fw-normal">Prestador de Serviços</h5>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title pricing-card-title"><i class="fa-solid fa-users me-2"></i><small
                                class="text-body-secondary fw-light">{{ $contPrestador }}</small></h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="row text-center">
            <div class="col-3">
                <div class="card mb-1 rounded-1 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Novo Funcionário</h5>

                        <a href="{{ route('rh.create') }}" class="btn btn-primary">Cadastrar</a>
                    </div>
                  </div>
            </div>

            <div class="col-sm-9">
                <div class="card">
                    <form action="{{ route('rh.index') }}" method="get">
                        <div class="card-body ">
                            <h5 class="card-title ">Busca no sistema</h5>
                            <div class="row">
                                <div class="col-4">
                                    <p class="card-text col-md-auto col-form-label text-md-start">Nome:</p>
                                    <div class="col-sm-auto">
                                        <input id="nome" type="text" class="form-control text-capitalize" name="nome">
                                    </div>
                                </div>

                                <div class="col-4">
                                    <p class="card-text col-md-auto col-form-label text-md-start">Contrato:</p>
                                    <div class="col-sm-auto">
                                        <input id="contrato" type="text" class="form-control text-capitalize" name="contrato">
                                    </div>
                                </div>

                                <div class="col-sm-auto mt-3">
                                    <button class="btn btn-primary ">
                                        <i class="fa-solid fa-magnifying-glass me-1"></i>Localizar
                                    </button>
                                </div>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-1 mb-3 border-bottom">
        </div>

        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-0 pb-2 mb-3 border-bottom">
        </div>
<<<<<<< HEAD
        <div class="row">
            <div class="col-auto">
                <h2>Lista de Colaboradores no Sistema</h2>
            </div>

        </div>

=======
        <h2>Lista de Funcionário no Sistema</h2>
>>>>>>> 4e1558b0426ae30c70e95cc6dd5c9eaf35b192d9

        <div class="table-responsive small mb-0">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">Matricula</th>
                        <th scope="col">Nome Completo</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Abrir Fixa</th>
                        <th scope="col">Atualizar</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($listaRHs as $listaRH)
                        <tr>
                            <td>{{ $listaRH->matricula }}</td>
                            <td class="text-capitalize">{{ $listaRH->nome }}</td>
                            <td>{{ $listaRH->email }}</td>
                            <td>{{ $listaRH->telefone }}</td>
                            <td>{{ $listaRH->status }}</td>
                            <td><a href="{{ route('rh.show', $listaRH->id) }}"> <i
                                        class="bi bi-folder2-open fs-5 text-success"></i></a></td>
                            <td><a href="{{ route('rh.edit', $listaRH->id) }}"> <i class="bi bi-person-fill-gear fs-5 text-danger"></i></a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">
                                <p class="fs-5 fw-medium text-danger mb-0">Nenhum Usuario foi Localizado</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <div class="row justify-content-center">
            <div class="col-auto">
                {{ $listaRHs->links() }}
            </div>
        </div>

    </main>
@endsection
